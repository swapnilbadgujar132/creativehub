<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="theme-color" content="#667eea">
    <title>@yield('title', 'CreativeHub')</title>
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Inter', system-ui, -apple-system, sans-serif;
            background-color: #f9fafb;
            color: #1f2937;
            line-height: 1.6;
        }

        .container {
            max-width: 896px;
            margin: 0 auto;
        }

        .navbar {
            position: fixed;
            top: 0;
            left: 0;
            right: 0;
            background: white;
            border-bottom: 1px solid #e5e7eb;
            z-index: 30;
            box-shadow: 0 1px 3px rgba(0,0,0,0.1);
        }

        .navbar-content {
            max-width: 896px;
            margin: 0 auto;
            padding: 12px 16px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .navbar-logo {
            display: flex;
            align-items: center;
            gap: 8px;
        }

        .logo-icon {
            width: 32px;
            height: 32px;
            border-radius: 8px;
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
            font-size: 12px;
        }

        .navbar h1 {
            font-size: 20px;
            font-weight: bold;
        }

        .navbar-actions {
            display: flex;
            gap: 8px;
        }

        .navbar-btn {
            padding: 8px;
            background: none;
            border: none;
            cursor: pointer;
            font-size: 16px;
            border-radius: 8px;
            transition: background 0.2s;
        }

        .navbar-btn:hover {
            background: #f3f4f6;
        }

        main {
            padding-top: 56px;
            padding-bottom: 96px;
        }

        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: white;
            border-top: 1px solid #e5e7eb;
            z-index: 30;
        }

        .bottom-nav-container {
            max-width: 896px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-around;
        }

        .nav-item {
            flex: 1;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 16px 0;
            text-decoration: none;
            color: #6b7280;
            font-size: 12px;
            font-weight: 500;
            transition: all 0.2s;
            border-top: 2px solid transparent;
        }

        .nav-item:hover {
            background: #f9fafb;
        }

        .nav-item.active {
            color: #3b82f6;
            border-top-color: #3b82f6;
        }

        .nav-icon {
            font-size: 24px;
            margin-bottom: 4px;
        }

        /* Cards */
        .card {
            background: white;
            border: 1px solid #e5e7eb;
            border-radius: 8px;
            padding: 16px;
            margin-bottom: 12px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.05);
            transition: box-shadow 0.2s;
        }

        .card:hover {
            box-shadow: 0 4px 12px rgba(0,0,0,0.1);
        }

        /* Gradients */
        .gradient-blue {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
            border-radius: 8px;
            padding: 24px 16px;
            text-align: center;
            margin-bottom: 24px;
        }

        .gradient-blue h2 {
            font-size: 28px;
            font-weight: bold;
            margin: 8px 0;
        }

        .gradient-blue p {
            font-size: 14px;
            opacity: 0.9;
        }

        /* Buttons */
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 8px;
            font-weight: 600;
            cursor: pointer;
            font-size: 14px;
            transition: all 0.2s;
            text-decoration: none;
            display: inline-block;
            text-align: center;
        }

        .btn-primary {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            color: white;
        }

        .btn-primary:hover {
            transform: scale(1.05);
            box-shadow: 0 4px 12px rgba(102, 126, 234, 0.4);
        }

        .btn-secondary {
            background: white;
            color: #1f2937;
            border: 2px solid #d1d5db;
        }

        .btn-secondary:hover {
            background: #f9fafb;
        }

        .w-full {
            width: 100%;
        }

        .text-center {
            text-align: center;
        }

        .mt-6 {
            margin-top: 24px;
        }

        .mb-6 {
            margin-bottom: 24px;
        }

        .grid-cols-3 {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 12px;
        }

        .text-sm {
            font-size: 14px;
        }

        .text-gray-600 {
            color: #4b5563;
        }
    </style>
</head>
<body>
    @include('components.navbar')
    
    <main>
        @yield('content')
    </main>
    
    @include('components.bottom-nav')
</body>
</html>
