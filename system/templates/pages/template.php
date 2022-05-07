<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?=$data['title'];?></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>

    <div class="">

        <div class="">
        
            <nav class="py-2 bg-dark text-white border-bottom">
                <div class="container d-flex flex-wrap justify-content-center">
                    <ul class="nav m-auto">
                        <li class="nav-item"><a href="/documentation/" class="nav-link link-light px-2">Документация</a></li>
                        <li class="nav-item"><a href="/help/" class="nav-link link-light px-2">Помощь</a></li>
                        <li class="nav-item"><a href="/about/" class="nav-link link-light px-2">О нас</a></li>
                        <li class="nav-item"><a href="/core/" class="nav-link link-light px-2">Core</a></li>
                    </ul>
                </div>
            </nav>
        
            <header class="py-3 mb-4 border-bottom shadow bg-light" style="--bs-bg-opacity: .85;">
                <div class="container d-flex flex-wrap justify-content-center">
                    <a href="/" class="d-flex align-items-center  text-dark text-decoration-none">
                        <span class="fs-4">SimpleMVC</span>
                    </a>
                </div>
            </header>

        </div>

    </div>

    <div class="container d-flex justify-content-center align-items-center mt-3 pt-3" style="min-height: 75vh">

        <div class="container-fluid mt-3 pt-3">
            
            <?php include $this->content; ?>
            
        </div>

    </div>

    <div class="container-fluid shadow-lg p-3">

        <footer class="d-flex flex-wrap justify-content-center align-items-center py-3">
            <div class="col-md-4 d-flex align-items-center">
                <span class="text-muted m-auto">© <?=date('Y');?> Все права защищены</span>
            </div>
        </footer>
    
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        
</body>
</html>