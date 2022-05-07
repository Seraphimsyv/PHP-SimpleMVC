<div class="container p-3" id="icon-grid">

    <?php if(isset($data['docs'])) : ?>

        <h2 class="pb-2 text-center display-2 mb-2"><?=$data['title'];?></h2>

        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-5 py-5">

            <?php foreach($data['docs'] as $slug => $doc) : ?>

                <div class="col d-flex align-items-start">

                    <div class="card shadow-sm">
                        <div class="card-body">
                            <h5 class="card-title"><?=$doc['title'];?></h5>
                            <p class="card-text"><?=substr(trim($doc['description']), 0, 50);?>.</p>
                            <a href="?document=<?=$doc['slug'];?>" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
        
                </div>

            <?php endforeach; ?>
        
        </div>
    
    <?php else : ?>

        <h2 class="pb-2 border-bottom"><?=$data['doc']['title'];?></h2>

        <p>
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Iure, aspernatur porro sequi possimus soluta explicabo impedit ut facilis perferendis, nihil nam, aut ab repellendus ipsa. Labore sed id dolorum commodi!
        </p>

    <?php endif; ?>
      
</div>