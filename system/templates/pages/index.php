<div class="container-fluid bg-secondary p-5 position-relative" style="--bs-bg-opacity: .10;">

    <div class="m-5 p-5">

        <div>

            <h1 class="display-1">
                SimpleMVC
            </h1>

            <h1 class="display-5">
                Создавайте просто и быстро
            </h1>

        </div>

    </div>

    <div class="container shadow bg-light p-5 m-5 position-absolute top-75 start-50 w-75 translate-middle">
        
        <div class="test">

            <span id="user">localhost</span>
            <span id="machine">~ $ </span>
            <span id="console"></span>

        </div>

    </div>

</div>

<script>
    let txt = "git clone 'https://github.com/Seraphimsyv/SimpleMVC'";
    let target = document.getElementById('console');

    function consoleWriter(index) {
        let text = "";
        for(let i = 0; i < index; i++) {
            text = text + txt[i];
        }
        target.innerText = text;
        if(txt.length == index) {
            clearInterval(interval);
        }
    }

    let inter = 0;
    let interval = setInterval(() => {
        consoleWriter(inter);
        inter = inter + 1
    }, 50)


</script>

<style>
    .test {
        color: black;
        font-family:-apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
    }
    #user {
        color:chocolate;
    }
    #machine {
        color:darkgreen;
    }
</style>

<!-- -->

<div class="p-3 pb-5">

  <div class="container-fluid p-5 m-5">

    <h1>Начать работу с SimpleMVC</h1>
    <p class="fs-5 col-md-8">Быстро и легко приступайте к работе с готовыми к работе файлами SimpleMVC с помощью этого базового примера с базовым HTML.</p>

    <hr class="col-3 col-md-2 mb-5">

    <div class="row g-5">
        
      <div class="col-md-6">
          <h2>Starter projects</h2>
          <p>Ready to beyond the starter template? Check out these open source projects that you can quickly duplicate to a new GitHub repository.</p>
          <ul class="icon-list">
          <li><a href="https://github.com/twbs/bootstrap-npm-starter" rel="noopener" target="_blank">Bootstrap npm starter</a></li>
          <li class="text-muted">Bootstrap Parcel starter (coming soon!)</li>
          </ul>
      </div>

      <div class="col-md-6">
          <h2>Guides</h2>
          <p>Read more detailed instructions and documentation on using or contributing to Bootstrap.</p>
          <ul class="icon-list">
          <li><a href="/docs/5.1/getting-started/introduction/">Bootstrap quick start guide</a></li>
          <li><a href="/docs/5.1/getting-started/webpack/">Bootstrap Webpack guide</a></li>
          <li><a href="/docs/5.1/getting-started/parcel/">Bootstrap Parcel guide</a></li>
          <li><a href="/docs/5.1/getting-started/contribute/">Contributing to Bootstrap</a></li>
          </ul>
      </div>

    </div>

  </div>

  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

  <div class="container marketing">

    <!-- START THE FEATURETTES -->

    <hr class="featurette-divider">

    <div class="d-flex justify-content-around">
        
        <div class="m-2">
            <h2 class="featurette-heading">С чего начать?</h2>
            <p class="lead">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus dolore nihil in voluptatem veniam sed voluptas consequuntur nisi, iusto obcaecati esse facere quaerat qui laborum dolor odit, odio, ea deserunt?.</p>
        </div>
        
        <div class="m-2">
            <img width="500" src="<?php echo STATIC_FILES . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'futures_one.jpg';?>" alt="">
        </div>

    </div>

    <hr class="featurette-divider">

    <div class="d-flex justify-content-around flex-row-reverse">
      
        <div class="m-2">
            <h2 class="featurette-heading">Что такое urlspatterns?</h2>
            <p class="lead">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsum ratione molestiae nihil vero quis accusamus, similique, perferendis minus amet ducimus deserunt numquam. Quidem ab cum quam voluptatibus, quaerat dolore suscipit..</p>
        </div>
        
        <div class="m-2">
            <img width="500" src="<?php echo STATIC_FILES . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'futures_two.jpg';?>" alt="">
        </div>
    
    </div>

    <hr class="featurette-divider">

    <div class="d-flex justify-content-around">
        
        <div class="m-2">
            <h2 class="featurette-heading">Работа с Simple-NoSQL</h2>
            <p class="lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Vitae quisquam voluptas facilis ea, veniam amet omnis eaque repellendus ut maiores sint vel libero facere nulla autem delectus aspernatur deleniti ratione.</p>
        </div>
        
        <div class="m-2">
            <img width="500" src="<?php echo STATIC_FILES . DIRECTORY_SEPARATOR . 'img' . DIRECTORY_SEPARATOR . 'futures_three.jpg';?>" alt="">
        </div>

    </div>

  </div>

</div>