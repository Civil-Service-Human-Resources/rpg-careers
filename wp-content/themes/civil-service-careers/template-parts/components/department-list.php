<!-- department list component -->
<div class="component-departments">
    <h2 class="heading-large"><?php echo $data['heading'] ?></h2>
    <p class="lede"><?php echo $data['intro'] ?></p>
    <ul class="component-departments__list">
        <?php foreach($data['departments'] as $key => $dept): ?>
            <li class="component-departments__list-item">
                <h3 class="component-departments__list-item-name"><a href="<?php echo $dept['dept_info_link_url'] ?>"><?php echo $dept['dept_info_department_name'] ?></a></h3>
                <p><?php echo $dept['dept_info_short_description'] ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
    <p><a href="<?php echo $data['departments_link'] ?>">See all our departments</a></p>
</div>
<!-- /department list component -->