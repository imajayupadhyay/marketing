<?php
/**
 * Laravel Cache Clearer
 *
 * This file allows you to clear Laravel caches via web browser
 * when you don't have SSH access to your server.
 *
 * SECURITY WARNING:
 * - Delete this file after use or add password protection
 * - Never leave this file accessible in production permanently
 *
 * USAGE:
 * 1. Upload this file to your public_html directory
 * 2. Visit: https://yourdomain.com/clear-cache.php
 * 3. Click the buttons to clear specific caches
 * 4. DELETE this file after use for security
 */

// Change this password for security
define('CACHE_CLEAR_PASSWORD', 'dxdpixel2024');

session_start();

// Simple password protection
if (!isset($_SESSION['authenticated'])) {
    if (isset($_POST['password'])) {
        if ($_POST['password'] === CACHE_CLEAR_PASSWORD) {
            $_SESSION['authenticated'] = true;
        } else {
            $error = "Invalid password!";
        }
    }

    if (!isset($_SESSION['authenticated'])) {
        ?>
        <!DOCTYPE html>
        <html>
        <head>
            <title>Laravel Cache Clearer - Authentication</title>
            <style>
                body { font-family: Arial, sans-serif; max-width: 500px; margin: 50px auto; padding: 20px; }
                input[type="password"] { width: 100%; padding: 10px; margin: 10px 0; }
                button { background: #4CAF50; color: white; padding: 10px 20px; border: none; cursor: pointer; }
                .error { color: red; }
            </style>
        </head>
        <body>
            <h2>Laravel Cache Clearer</h2>
            <p>Enter password to access cache clearing tools:</p>
            <?php if (isset($error)) echo "<p class='error'>$error</p>"; ?>
            <form method="POST">
                <input type="password" name="password" placeholder="Enter password" required>
                <button type="submit">Login</button>
            </form>
        </body>
        </html>
        <?php
        exit;
    }
}

// Path to artisan (adjust if needed)
$artisanPath = __DIR__ . '/../../artisan';

// Check if artisan exists
if (!file_exists($artisanPath)) {
    die("Error: artisan file not found at: $artisanPath");
}

$output = [];
$action = isset($_GET['action']) ? $_GET['action'] : '';

// Execute artisan commands based on action
if ($action) {
    switch ($action) {
        case 'clear-all':
            exec("cd " . dirname($artisanPath) . " && php artisan cache:clear 2>&1", $output);
            exec("cd " . dirname($artisanPath) . " && php artisan config:clear 2>&1", $output);
            exec("cd " . dirname($artisanPath) . " && php artisan route:clear 2>&1", $output);
            exec("cd " . dirname($artisanPath) . " && php artisan view:clear 2>&1", $output);
            $message = "All caches cleared successfully!";
            break;

        case 'cache-clear':
            exec("cd " . dirname($artisanPath) . " && php artisan cache:clear 2>&1", $output);
            $message = "Application cache cleared!";
            break;

        case 'config-clear':
            exec("cd " . dirname($artisanPath) . " && php artisan config:clear 2>&1", $output);
            $message = "Configuration cache cleared!";
            break;

        case 'route-clear':
            exec("cd " . dirname($artisanPath) . " && php artisan route:clear 2>&1", $output);
            $message = "Route cache cleared!";
            break;

        case 'view-clear':
            exec("cd " . dirname($artisanPath) . " && php artisan view:clear 2>&1", $output);
            $message = "View cache cleared!";
            break;

        case 'rebuild-cache':
            exec("cd " . dirname($artisanPath) . " && php artisan config:cache 2>&1", $output);
            exec("cd " . dirname($artisanPath) . " && php artisan route:cache 2>&1", $output);
            exec("cd " . dirname($artisanPath) . " && php artisan view:cache 2>&1", $output);
            $message = "Production cache rebuilt!";
            break;

        case 'optimize':
            exec("cd " . dirname($artisanPath) . " && php artisan optimize 2>&1", $output);
            $message = "Application optimized!";
            break;

        case 'optimize-clear':
            exec("cd " . dirname($artisanPath) . " && php artisan optimize:clear 2>&1", $output);
            $message = "Optimization cache cleared!";
            break;

        case 'logout':
            session_destroy();
            header("Location: clear-cache.php");
            exit;

        default:
            $message = "Unknown action!";
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Cache Clearer - DxD Pixelwork</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            padding: 20px;
            min-height: 100vh;
        }
        .container {
            max-width: 900px;
            margin: 0 auto;
            background: white;
            border-radius: 10px;
            box-shadow: 0 10px 40px rgba(0,0,0,0.2);
            overflow: hidden;
        }
        .header {
            background: #333;
            color: white;
            padding: 30px;
            text-align: center;
        }
        .header h1 { margin-bottom: 10px; }
        .header p { opacity: 0.8; font-size: 14px; }
        .content { padding: 30px; }
        .warning {
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
        }
        .success {
            background: #d4edda;
            border-left: 4px solid #28a745;
            padding: 15px;
            margin-bottom: 20px;
            border-radius: 4px;
            color: #155724;
        }
        .button-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin: 20px 0;
        }
        .btn {
            display: block;
            padding: 15px 20px;
            text-decoration: none;
            text-align: center;
            border-radius: 5px;
            font-weight: bold;
            transition: all 0.3s;
            border: none;
            cursor: pointer;
            font-size: 14px;
        }
        .btn-primary {
            background: #007bff;
            color: white;
        }
        .btn-primary:hover {
            background: #0056b3;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(0,123,255,0.3);
        }
        .btn-danger {
            background: #dc3545;
            color: white;
        }
        .btn-danger:hover {
            background: #c82333;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(220,53,69,0.3);
        }
        .btn-success {
            background: #28a745;
            color: white;
        }
        .btn-success:hover {
            background: #218838;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(40,167,69,0.3);
        }
        .btn-warning {
            background: #ffc107;
            color: #333;
        }
        .btn-warning:hover {
            background: #e0a800;
            transform: translateY(-2px);
            box-shadow: 0 4px 12px rgba(255,193,7,0.3);
        }
        .btn-secondary {
            background: #6c757d;
            color: white;
        }
        .btn-secondary:hover {
            background: #5a6268;
        }
        .output {
            background: #f8f9fa;
            padding: 15px;
            border-radius: 5px;
            margin-top: 20px;
            font-family: 'Courier New', monospace;
            font-size: 12px;
            max-height: 300px;
            overflow-y: auto;
            border: 1px solid #dee2e6;
        }
        .section {
            margin: 30px 0;
        }
        .section h2 {
            color: #333;
            margin-bottom: 15px;
            padding-bottom: 10px;
            border-bottom: 2px solid #007bff;
        }
        .footer {
            background: #f8f9fa;
            padding: 20px;
            text-align: center;
            color: #6c757d;
            font-size: 13px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <h1>🚀 Laravel Cache Clearer</h1>
            <p>DxD Pixelwork - Production Cache Management</p>
        </div>

        <div class="content">
            <div class="warning">
                <strong>⚠️ Security Warning:</strong> Delete this file after use! Never leave cache clearing tools accessible in production permanently.
            </div>

            <?php if (isset($message)): ?>
                <div class="success">
                    <strong>✓ Success:</strong> <?php echo $message; ?>
                </div>
            <?php endif; ?>

            <div class="section">
                <h2>Quick Actions</h2>
                <div class="button-grid">
                    <a href="?action=clear-all" class="btn btn-danger" onclick="return confirm('Clear all caches?')">
                        🗑️ Clear All Caches
                    </a>
                    <a href="?action=rebuild-cache" class="btn btn-success" onclick="return confirm('Rebuild production cache?')">
                        🔧 Rebuild Cache
                    </a>
                    <a href="?action=optimize" class="btn btn-primary">
                        ⚡ Optimize App
                    </a>
                    <a href="?action=optimize-clear" class="btn btn-warning">
                        🔄 Clear Optimization
                    </a>
                </div>
            </div>

            <div class="section">
                <h2>Individual Cache Controls</h2>
                <div class="button-grid">
                    <a href="?action=cache-clear" class="btn btn-primary">
                        Clear Application Cache
                    </a>
                    <a href="?action=config-clear" class="btn btn-primary">
                        Clear Config Cache
                    </a>
                    <a href="?action=route-clear" class="btn btn-primary">
                        Clear Route Cache
                    </a>
                    <a href="?action=view-clear" class="btn btn-primary">
                        Clear View Cache
                    </a>
                </div>
            </div>

            <?php if (!empty($output)): ?>
                <div class="section">
                    <h2>Command Output</h2>
                    <div class="output">
                        <?php echo implode("\n", array_map('htmlspecialchars', $output)); ?>
                    </div>
                </div>
            <?php endif; ?>

            <div class="section">
                <h2>Session</h2>
                <a href="?action=logout" class="btn btn-secondary">
                    🔒 Logout
                </a>
            </div>

            <div class="section">
                <h2>Usage Instructions</h2>
                <ol style="line-height: 2;">
                    <li><strong>Clear All Caches:</strong> Clears all Laravel caches (use when making changes)</li>
                    <li><strong>Rebuild Cache:</strong> Rebuilds config, route, and view cache for production performance</li>
                    <li><strong>Optimize App:</strong> Runs Laravel optimization (caches config, routes, events)</li>
                    <li><strong>Individual Controls:</strong> Clear specific cache types as needed</li>
                </ol>
            </div>

            <div class="warning" style="background: #f8d7da; border-color: #dc3545;">
                <strong>🔥 Remember:</strong> DELETE THIS FILE (clear-cache.php) AFTER USE!<br>
                Leaving cache clearing tools publicly accessible is a security risk.
            </div>
        </div>

        <div class="footer">
            <p>DxD Pixelwork | Laravel Cache Management Tool</p>
            <p>Current Time: <?php echo date('Y-m-d H:i:s'); ?></p>
        </div>
    </div>
</body>
</html>
