  <!-- Start Portfolio Section -->
  <?php
 $pages = App\pages::all();
 ?>
<?php if($pages->count() > 0): ?>
 <div class="portfolio" data-aos="fade-up" data-aos-anchor-placement="top-center" data-aos-duration="2000">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <ul class="filters text-center">
            <li class="active" data-filter="*"><a href="#!"><?php echo app('translator')->getFromJson('All'); ?></a></li>
            <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <?php if(App::isLocale('ar')): ?>
                <li data-filter=".<?php echo e($page->name); ?>"><a href="#!"><?php echo e($page->name_ar); ?></a></li>
            <?php else: ?>
                <li data-filter=".<?php echo e($page->name); ?>"><a href="#!"><?php echo e($page->name); ?></a></li>
            <?php endif; ?>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </ul>
          <div class="projects">
            <div class="row">
  <?php $__currentLoopData = $pages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $page): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <?php $__currentLoopData = @$page->places; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $place): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
      <!-- Start Web Projects -->
        <div class="col-lg-4 item <?php echo e($page->name); ?>">
          <div class="card">
            <div class="card-head">
              <img src="<?php echo e('/img/places_images/'.@$place->image->name); ?>" alt="" class="img-fluid card-img" />
            </div>

            <div class="card-body text-center">
              <a href="<?php echo e($place->url); ?>" class="btn btn-lg card-btn"><?php echo app('translator')->getFromJson('See Project'); ?></a>
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<?php endif; ?>

