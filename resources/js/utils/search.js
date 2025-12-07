// Search utility functions with fuzzy matching

/**
 * Calculate the similarity score between two strings using Levenshtein distance
 * @param {string} str1 - First string
 * @param {string} str2 - Second string
 * @returns {number} - Similarity score between 0 and 1
 */
export function calculateSimilarity(str1, str2) {
    const longer = str1.length > str2.length ? str1 : str2;
    const shorter = str1.length > str2.length ? str2 : str1;

    if (longer.length === 0) return 1.0;

    const editDistance = levenshteinDistance(longer, shorter);
    return (longer.length - editDistance) / longer.length;
}

/**
 * Calculate Levenshtein distance between two strings
 * @param {string} str1 - First string
 * @param {string} str2 - Second string
 * @returns {number} - Edit distance
 */
function levenshteinDistance(str1, str2) {
    const matrix = [];

    for (let i = 0; i <= str2.length; i++) {
        matrix[i] = [i];
    }

    for (let j = 0; j <= str1.length; j++) {
        matrix[0][j] = j;
    }

    for (let i = 1; i <= str2.length; i++) {
        for (let j = 1; j <= str1.length; j++) {
            if (str2.charAt(i - 1) === str1.charAt(j - 1)) {
                matrix[i][j] = matrix[i - 1][j - 1];
            } else {
                matrix[i][j] = Math.min(
                    matrix[i - 1][j - 1] + 1, // substitution
                    matrix[i][j - 1] + 1,     // insertion
                    matrix[i - 1][j] + 1      // deletion
                );
            }
        }
    }

    return matrix[str2.length][str1.length];
}

/**
 * Search through data with fuzzy matching and ranking
 * @param {string} query - Search query
 * @param {Array} data - Array of searchable items
 * @param {number} threshold - Minimum similarity score (0-1)
 * @returns {Array} - Sorted array of matching results
 */
export function fuzzySearch(query, data, threshold = 0.3) {
    if (!query || query.trim() === '') {
        return [];
    }

    const queryLower = query.toLowerCase().trim();
    const words = queryLower.split(' ').filter(word => word.length > 0);

    const results = data.map(item => {
        let score = 0;
        let matchedFields = [];

        // Check title (highest weight)
        const titleScore = calculateMatchScore(queryLower, item.title.toLowerCase(), words);
        if (titleScore > 0) {
            score += titleScore * 10; // High weight for title matches
            matchedFields.push('title');
        }

        // Check description (medium weight)
        const descScore = calculateMatchScore(queryLower, item.description.toLowerCase(), words);
        if (descScore > 0) {
            score += descScore * 5; // Medium weight for description matches
            matchedFields.push('description');
        }

        // Check keywords (medium weight)
        if (item.keywords && item.keywords.length > 0) {
            const keywordScore = item.keywords.reduce((acc, keyword) => {
                const kwScore = calculateMatchScore(queryLower, keyword.toLowerCase(), words);
                return acc + kwScore;
            }, 0);
            if (keywordScore > 0) {
                score += keywordScore * 7; // Medium-high weight for keyword matches
                matchedFields.push('keywords');
            }
        }

        // Check category (low weight)
        const categoryScore = calculateMatchScore(queryLower, item.category.toLowerCase(), words);
        if (categoryScore > 0) {
            score += categoryScore * 2; // Low weight for category matches
            matchedFields.push('category');
        }

        return {
            ...item,
            score,
            matchedFields
        };
    });

    // Filter and sort results
    return results
        .filter(result => result.score > threshold)
        .sort((a, b) => b.score - a.score);
}

/**
 * Calculate match score for a field
 * @param {string} query - Search query
 * @param {string} field - Field to search in
 * @param {Array} words - Query words
 * @returns {number} - Match score
 */
function calculateMatchScore(query, field, words) {
    let score = 0;

    // Exact match (highest score)
    if (field === query) {
        return 10;
    }

    // Starts with query
    if (field.startsWith(query)) {
        return 8;
    }

    // Contains query
    if (field.includes(query)) {
        return 6;
    }

    // Check individual words
    words.forEach(word => {
        if (field.includes(word)) {
            score += 3;
        }

        // Fuzzy match for individual words
        const similarity = calculateSimilarity(word, field);
        if (similarity > 0.7) {
            score += similarity * 2;
        }
    });

    return score;
}

/**
 * Highlight matching text in a string
 * @param {string} text - Text to highlight
 * @param {string} query - Search query
 * @returns {string} - Text with highlight markers
 */
export function highlightMatch(text, query) {
    if (!query || !text) return text;

    const regex = new RegExp(`(${escapeRegex(query)})`, 'gi');
    return text.replace(regex, '<mark class="bg-yellow-200 dark:bg-yellow-600 px-1 rounded">$1</mark>');
}

/**
 * Escape special regex characters
 * @param {string} string - String to escape
 * @returns {string} - Escaped string
 */
function escapeRegex(string) {
    return string.replace(/[.*+?^${}()|[\]\\]/g, '\\$&');
}

/**
 * Get search suggestions based on partial query
 * @param {string} query - Partial search query
 * @param {Array} data - Array of searchable items
 * @param {number} limit - Maximum number of suggestions
 * @returns {Array} - Array of suggestions
 */
export function getSearchSuggestions(query, data, limit = 5) {
    if (!query || query.trim() === '') {
        return [];
    }

    const queryLower = query.toLowerCase();
    const suggestions = new Set();

    data.forEach(item => {
        // Add title if it matches
        if (item.title.toLowerCase().includes(queryLower)) {
            suggestions.add(item.title);
        }

        // Add matching keywords
        if (item.keywords) {
            item.keywords.forEach(keyword => {
                if (keyword.toLowerCase().includes(queryLower)) {
                    suggestions.add(keyword);
                }
            });
        }
    });

    return Array.from(suggestions).slice(0, limit);
}
