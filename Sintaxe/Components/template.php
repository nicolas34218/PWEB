<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{TITLE}}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background-color: #4A001F; 
            color: #F8F8F8; 
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 120px;
            padding-bottom: 100px;
        }
        
        .cabeca {
            background-color: #800020;
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 12px rgba(90, 0, 20, 0.4); 
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
            position: fixed;
            top: 0;
            right: 0;
            left: 0;
            width: 100%;
            z-index: 1000;
            padding: 15px 0;
        }
        
        .cabeca h2 {
            color: #F8F8F8; 
            font-size: 1.8rem;
            margin-left: 20px;
        }
        
        .voltar {
            position: fixed;
            top: 15px;
            left: 15px;
            z-index: 1001;
        }
        
        .voltar a {
            display: block;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            text-align: center;
            line-height: 50px;
            text-decoration: none;
            color: #FFDAB9; 
            font-size: 32px;
            font-weight: bold;
            transition: all 0.3s ease;
            backdrop-filter: blur(5px);
            background-color: rgba(128, 0, 32, 0.2);
        }
        
        .voltar a:hover {
            color: #C04000; 
            transform: scale(1.1);
        }
        
        .main-container {
            background-color: #6C002F; 
            width: 90%;
            max-width: 800px;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 8px 32px rgba(50, 0, 15, 0.5); 
            margin: 20px;
            display: flex;
            flex-direction: column;
            align-items: center;
            border: 1px solid rgba(255, 255, 255, 0.18);
            backdrop-filter: blur(5px);
        }
        
        h1 {
            color: #FFDAB9; 
            margin-bottom: 30px;
            text-align: center;
            font-size: 2.5rem;
            text-shadow: 0 2px 4px rgba(0,0,0,0.3);
        }
        
        .content {
            background: rgba(128, 0, 32, 0.2); 
            border-radius: 10px;
            padding: 30px;
            width: 100%;
            box-shadow: 0 4px 15px rgba(0,0,0,0.2);
            font-size: 1.1rem;
            line-height: 1.8;
            color: #F8F8F8; 
        }
        
        .content p {
            margin-bottom: 20px;
            color: #F8F8F8; 
        }
        
        .content h2 {
            color: #FFDAB9; 
            margin: 25px 0 15px;
            font-size: 1.6rem;
            border-bottom: 2px solid rgba(255,255,255,0.1);
            padding-bottom: 10px;
        }
        
        .features {
            display: flex;
            justify-content: space-between;
            margin: 30px 0;
            flex-wrap: wrap;
        }
        
        .feature {
            background: rgba(128, 0, 32, 0.4); 
            border-radius: 10px;
            padding: 20px;
            width: calc(33% - 20px);
            text-align: center;
            margin-bottom: 20px;
            transition: all 0.3s ease;
        }
        
        .feature:hover {
            transform: translateY(-10px);
            background: rgba(128, 0, 32, 0.6); 
        }
        
        .feature i {
            font-size: 3rem;
            color: #FFDAB9; 
            margin-bottom: 15px;
        }
        
        .feature h3 {
            margin-bottom: 10px;
            font-size: 1.3rem;
            color: #F8F8F8;
        }
        
        .highlight {
            color: #FFDAB9; 
            font-weight: bold;
        }
        
        .code-sample {
            background: rgba(0, 0, 0, 0.4); 
            border-radius: 10px;
            padding: 20px;
            margin: 30px 0;
            overflow-x: auto;
        }
        
        .code-sample pre {
            background: #1e1e1e; 
            padding: 15px;
            border-radius: 8px;
            overflow-x: auto;
        }
        
        .code-sample code {
            color: #dcdcdc; 
            font-family: 'Courier New', monospace;
        }
        
        footer {
            background-color: #800020; 
            border-radius: 10px 10px 0 0;
            box-shadow: 0 -4px 12px rgba(90, 0, 20, 0.4); 
            text-align: center;
            font-size: 1rem;
            color: #F8F8F8; 
            position: fixed;
            bottom: 0;
            width: 100%;
            padding: 15px;
            z-index: 1000;
            box-sizing: border-box; 
        }
        
        @media (max-width: 768px) {
            body {
                padding-top: 150px;
            }
            
            .main-container {
                padding: 20px;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            .feature {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="cabeca">
        <nav class="voltar">
            <a href="/Sintaxe/secao5/index.php">&lt;</a>
        </nav>
        <h2>{{PAGE_TITLE}}</h2>
    </div>
    
    <div class="main-container">
        <h1>{{HEADING}}</h1>
        <div class="content">
            {{CONTENT}}
        </div>
    </div>
    
    <footer>
        {{FOOTER}}
    </footer>
</body>
</html>