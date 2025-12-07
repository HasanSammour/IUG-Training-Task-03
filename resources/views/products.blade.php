<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Products List - Task 03</title>
        <style>
            * {
                margin: 0;
                padding: 0;
                box-sizing: border-box;
            }

            body {
                font-family: 'Arial', sans-serif;
                background-color: rgb(240, 248, 255);
                color: #333;
                line-height: 1.6;
                max-width: 1200px;
                margin: 0 auto;
                padding: 20px;
            }

            header {
                text-align: center;
                margin-bottom: 40px;
                padding-bottom: 20px;
                border-bottom: 2px solid #007bff;
            }

            h1 {
                color: #333;
                font-size: 2.5rem;
                margin-bottom: 10px;
            }

            .subtitle {
                color: #666;
                font-size: 1.1rem;
                margin-bottom: 30px;
            }

            .navigation {
                text-align: center;
                margin: 30px 0;
            }

            .nav-button {
                display: inline-block;
                padding: 12px 25px;
                background: #007bff;
                color: white;
                text-decoration: none;
                border-radius: 5px;
                margin: 0 10px;
                font-weight: bold;
                transition: all 0.3s ease;
            }

            .nav-button:hover {
                background: #0056b3;
                transform: translateY(-2px);
                box-shadow: 0 4px 8px rgba(0,0,0,0.2);
            }

            .products-container {
                background-color: white;
                border-radius: 10px;
                padding: 30px;
                box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
                margin-bottom: 30px;
            }

            .table-container {
                overflow-x: auto;
            }

            table {
                width: 100%;
                border-collapse: collapse;
                background: white;
                margin-top: 20px;
            }

            th {
                background-color: #333;
                color: white;
                padding: 15px;
                text-align: left;
                font-weight: bold;
            }

            td {
                padding: 15px;
                text-align: left;
                border-bottom: 1px solid #ddd;
            }

            tr:hover {
                background-color: #f8f9fa;
            }

            .price {
                color: #28a745;
                font-weight: bold;
                font-size: 1.1rem;
            }

            .id-cell {
                color: #666;
                font-weight: bold;
            }

            .stats-box {
                background: #f8f9fa;
                padding: 20px;
                border-radius: 8px;
                margin: 30px 0;
                display: flex;
                justify-content: space-around;
                text-align: center;
                border: 1px solid #dee2e6;
            }

            .stat-item {
                padding: 10px;
            }

            .stat-value {
                font-size: 2rem;
                font-weight: bold;
                color: #007bff;
                display: block;
            }

            .stat-label {
                color: #666;
                font-size: 0.9rem;
            }

            .database-info {
                background-color: #e8f4fd;
                padding: 20px;
                border-radius: 8px;
                margin: 20px 0;
                border-left: 4px solid #007bff;
            }

            .info-title {
                color: #007bff;
                margin-bottom: 10px;
                font-weight: bold;
            }

            footer {
                text-align: center;
                margin-top: 40px;
                padding-top: 20px;
                border-top: 1px solid #ddd;
                color: #666;
            }

            .highlight {
                background-color: #fff3cd;
                padding: 2px 5px;
                border-radius: 3px;
                font-weight: bold;
            }

            .no-data {
                text-align: center;
                padding: 50px;
                color: #666;
                font-size: 1.2rem;
            }

            .total-price {
                font-size: 1.2rem;
                font-weight: bold;
                color: #dc3545;
                text-align: right;
                padding: 15px;
                border-top: 2px solid #dee2e6;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Show Page</h1>
            <p class="subtitle">Task 03 - Showing data from <strong>products</strong> table</p>
        </header>

        <div class="navigation">
            <a href="{{ route("index") }}" class="nav-button">← Back to Task Solution</a>
            <a href="{{ route("show") }}" class="nav-button" style="background: #28a745;">🔄 Refresh Products</a>
        </div>

        <div class="database-info">
            <div class="info-title">📊 Database Information:</div>
            <p>• Table Name: <span class="highlight">products</span></p>
            <p>• Created via: <span class="highlight">Migration</span></p>
            <p>• Data inserted via: <span class="highlight">Seeder</span></p>
            <p>• Total Records: <span class="highlight">{{ $products->count() }}</span> products</p>
        </div>

        @if($products->count() > 0)
            <div class="products-container">
                <h2 style="color: #333; margin-bottom: 20px; text-align: center;">📋 Products List</h2>

                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="40%">Product Name</th>
                                <th width="20%">Price</th>
                                <th width="30%">Created Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($products as $product)
                            <tr>
                                <td class="id-cell">#{{ $product->id }}</td>
                                <td><strong>{{ $product->name }}</strong></td>
                                <td class="price">${{ number_format($product->price, 2) }}</td>
                                <td>{{ $product->created_at->format('F d, Y - h:i A') }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        @else
            <div class="no-data">
                <p style="font-size: 2rem; margin-bottom: 20px;">📭</p>
                <p>No products found in the database!</p>
                <p style="margin-top: 20px;">
                    <a href="/" class="nav-button" style="background: #ffc107; color: #333;">
                        ← Go to Task Solution to Seed Data
                    </a>
                </p>
            </div>
        @endif
        
        <div class="navigation">
            <a href="{{ route("index") }}" class="nav-button">🏠 Home - Task Solution</a>
            <a href="https://github.com/HasanSammour/IUG-Training-Task-03" 
               target="_blank" 
               class="nav-button" 
               style="background: #6f42c1;">
               📂 View on GitHub
            </a>
        </div>

        <footer>
            <p>Laravel Training Task 03 | Database Operations Solution | Products View</p>
        </footer>
    </body>
</html>
