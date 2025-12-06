<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Task 03 Solution - Database Operations</title>

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
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 40px 20px;
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
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .task-info {
            background-color: white;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        .task-info h2 {
            color: #007bff;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 1px solid #eee;
        }

        .steps-container {
            margin: 20px 0;
        }

        .step {
            background-color: #f8f9fa;
            border-left: 4px solid #007bff;
            padding: 15px;
            margin-bottom: 15px;
            border-radius: 0 5px 5px 0;
        }

        .step-number {
            display: inline-block;
            background-color: #007bff;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            text-align: center;
            line-height: 30px;
            margin-right: 10px;
            font-weight: bold;
        }

        .step-title {
            font-weight: bold;
            color: #333;
            margin-bottom: 5px;
        }

        .code-block {
            background-color: #282c34;
            color: #abb2bf;
            padding: 15px;
            border-radius: 5px;
            margin: 10px 0;
            font-family: 'Courier New', monospace;
            overflow-x: auto;
        }

        .note-box {
            background-color: #fff3cd;
            border-left: 4px solid #ffc107;
            padding: 15px;
            margin: 15px 0;
            border-radius: 0 5px 5px 0;
        }

        .button-container {
            text-align: center;
            margin: 40px 0;
        }

        .btn-view-products {
            display: inline-block;
            background-color: #28a745;
            color: white;
            padding: 15px 40px;
            font-size: 1.2rem;
            text-decoration: none;
            border-radius: 50px;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
            
        .tinker-section {
            background-color: #282c34;
            color: #abb2bf;
            padding: 25px;
            border-radius: 8px;
            margin: 30px 0;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
            border: 1px solid #444;
        }

        .tinker-title {
            color: #61afef;
            margin-bottom: 20px;
            font-size: 1.2rem;
            font-weight: bold;
            text-align: center;
            border-bottom: 1px solid #444;
            padding-bottom: 10px;
        }

        .tinker-item {
            margin-bottom: 15px;
            border-radius: 5px;
            overflow: hidden;
        }

        .tinker-comment-box {
            background-color: #1e2227;
            color: #98c379;
            padding: 10px 15px;
            font-style: italic;
            border-bottom: 1px solid #444;
            font-size: 0.95rem;
        }

        .tinker-comment-box::before {
            content: "💡 ";
            margin-right: 5px;
        }

        .tinker-command-box {
            background-color: #2c313a;
            padding: 12px 15px;
            display: flex;
            align-items: flex-start;
            border-left: 3px solid #61afef;
        }

        .tinker-prompt {
            color: #d19a66;
            margin-right: 10px;
            min-width: 40px;
            flex-shrink: 0;
        }

        .tinker-command {
            color: #61afef;
            flex: 1;
            white-space: pre-wrap;
            word-break: break-all;
            font-family: 'Consolas', 'Monaco', 'Courier New', monospace;
        }        

        .btn-view-products:hover {
            background-color: #218838;
            transform: translateY(-2px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
            text-decoration: none;
            color: white;
        }

        .github-link {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
        }

        .github-link a {
            color: #007bff;
            text-decoration: none;
            font-weight: bold;
        }

        .github-link a:hover {
            text-decoration: underline;
        }

        footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            color: #666;
        }

        .highlight {
            background-color: #e8f4fd;
            padding: 2px 5px;
            border-radius: 3px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="container">
        <header>
            <h1>Task 03 Solution</h1>
            <p class="subtitle">Basic Database Operations: Model, Migration, and Seeder</p>
        </header>

        <div class="task-info">
            <h2>How I Solved This Task</h2>

            <div class="steps-container">
                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <div class="step-title">Create Model and Migration files for Product Table</div>
                        <div class="code-block">php artisan make:model Product -m</div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <div class="step-title">Change schema in Migration class and run migration</div>
                        <div class="code-block">php artisan migrate:fresh</div>
                        <div class="note-box">
                            <strong>Note: Mass Assignment Protection</strong><br>
                            I define the <span class="highlight">$fillable</span> property in product model
                            to protect against mass-assignment vulnerabilities.
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <div class="step-title">Create Seeder class</div>
                        <div class="code-block">php artisan make:seeder ProductSeeder</div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <div class="step-title">Edit seeder file {ProductSeeder} then register it in DatabaseSeeder
                        </div>
                        <div class="code-block">php artisan db:seed<br></div>
                        <div class="note-box">
                            <strong>Note: Run Specific Seeder</strong><br>
                            We can Run <span class="highlight">ProductSeeder</span> Alone as follows
                            <div class="code-block">php artisan db:seed --class=ProductSeeder<br></div>
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <div class="step-title">Verify Data in the Database</div>
                        <p>Two methods used for verification:</p>
                        <p>1. Check XAMPP Server - Data added successfully ✓</p>
                        <p>2. Using Tinker Commands:</p>

                        <div class="tinker-instruction">
                            <strong>🔍 Testing with Laravel Tinker:</strong>
                            I Open terminal Then run these commands:
                        </div>

                        <div class="tinker-section">
                            <div class="tinker-title">🛠️ Tinker Console Commands (CRUD Operations)</div>

                            <div class="tinker-item">
                                <div class="tinker-comment-box">Open Laravel Tinker</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">$</span>
                                    <span class="tinker-command">php artisan tinker</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Import Product model namespace</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">use App\Models\Product</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Create new product</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::create(['name' => 'Tablet', 'price' => 289.00])</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Create another product</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::create(['name' => 'Monitor', 'price' => 199.99])</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Retrieve ALL products</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::all()</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Find product with ID = 1</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::find(1)</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Get products with price > $500</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::where('price', '>', 500)->get()</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Get most expensive product</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::orderBy('price', 'desc')->first()</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Update price of product with ID=2</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::find(2)->update(['price' => 399.99])</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Update all laptops price</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::where('name', 'Laptop')->update(['price' => 1099.99])</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Delete all tablets</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::where('name', 'Tablet')->delete()</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Delete product with ID=5</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::destroy(5)</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Count total number of products</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">Product::count()</span>
                                </div>
                            </div>
                        
                            <div class="tinker-item">
                                <div class="tinker-comment-box">Exit Tinker shell</div>
                                <div class="tinker-command-box">
                                    <span class="tinker-prompt">>>></span>
                                    <span class="tinker-command">exit</span>
                                </div>
                            </div>
                        </div>

                        <div class="tinker-instruction">
                            <strong>💡 Note:</strong> These commands verify that:
                            <ul style="margin-top: 10px; padding-left: 20px;">
                                <li>Table is created correctly</li>
                                <li>Data is accessible via Eloquent ORM</li>
                                <li>CRUD operations work properly</li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <div class="step-title">Additional Step: Create Views and Routes</div>

                        <p>Created <strong>two Blade views</strong> and their corresponding routes:</p>

                        <div style="margin: 15px 0; padding: 15px; background: #f8f9fa; border-radius: 5px;">
                            <p><strong>📄 View 1: Home Page</strong></p>
                            <div class="code-block">welcome.blade.php</div>
                            <p>• Displays this task solution information</p>
                            <p>• Contains all implementation steps</p>
                            <p>• Shows Tinker commands for testing</p>

                            <p><strong>Route:</strong></p>
                            <div class="code-block">
                                Route::get('/', function () { return view('welcome'); });
                            </div>
                        </div>

                        <div style="margin: 15px 0; padding: 15px; background: #f8f9fa; border-radius: 5px;">
                            <p><strong>📄 View 2: Products Page</strong></p>
                            <div class="code-block">products.blade.php</div>
                            <p>• Displays all products from database</p>
                            <p>• Shows data in formatted table</p>
                            <p>• Includes statistics and database info</p>

                            <p><strong>Route:</strong></p>
                            <div class="code-block">
                                Route::get('/products', function () {
                                    $products = Product::all();
                                    return view('products', ['products' => $products]);
                                });
                            </div>
                        </div>

                        <div class="note-box">
                            <strong>Navigation Flow:</strong><br>
                            Home Page (/) → View Products Button → Products Page (/products) → Back Button → Home Page
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="button-container">
            <a href="/products" class="btn-view-products">View Products Table</a>
        </div>

        <div class="github-link">
            <p>GitHub Repository:</p>
            <a href="https://github.com/HasanSammour/IUG-Training-Task-03" target="_blank">
                https://github.com/HasanSammour/IUG-Training-Task-03
            </a>
        </div>

        <footer>
            <p>Laravel Training Task 03 | Database Operations Solution</p>
        </footer>
    </div>
</body>

</html>
