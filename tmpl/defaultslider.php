<?php defined('_JEXEC') or die;
if (!empty($list)) $items = array_slice($list, 0, (int)$params->get('count_reviews'));
$doc = JFactory::getDocument();
$doc->addScript('/modules/mod_reviews/assets/js/reviews.js');
$menu = $app->getMenu();
$reviews_page = $menu->getItem($params->get('all_reviews_link'))->route;
?>
<div class="reviews-wrapper">
    <div class="msg-icon custom-header help-articles-module-header">
      <h2>Отзывы наших клиентов</h2>
      <div class="all-articles-wrap">
        <a href="<?php echo $reviews_page; ?>" class="orange-link">Посмотреть все отзывы</a>
      </div>
    </div>
    <ul class="unstyled reviews-slider">
    <?php foreach($items as $review) : $date = JFactory::getDate($review->date); ?>
      <li>
        <div class="one-review white-box" >
          <div class="reviewer-info">
            <span class="reviewer-name">
              <?php echo $review->fio; ?>
            </span>
            <div class="review-rate-wrapper">
              <div class="star-rating">
                <span class="rate-stars star<?php echo $review->rate; ?>"></span>
              </div>
            </div>
            <p class="review-date">
              <?php echo JHTML::_('date', $review->date, JText::_('j F Y') ); ?>
            </p>
          </div>
          <div class="review-text-wrapper">
            <p class="review-text">
              <?php echo strip_tags($review->text); ?>
            </p>
          </div>
        </div>
      </li>
      <?php endforeach; ?>
    </ul>
</div>