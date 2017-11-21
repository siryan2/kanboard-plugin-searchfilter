<div class="dropdown additional-filters" style="float:left;">
    <a href="#" class="dropdown-menu dropdown-menu-link-icon btn" title="<?= t('Additional filters') ?>">
        <?= t('Additional filters') ?> <i class="fa fa-caret-down"></i></a>

    <ul>
        <li><a href="#" class="filter-helper" data-filter="creator:me"><?= t('Created by myself') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"red task_open"'><?= t('Created by myself and task open') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"blue task_in_process"'><?= t('Created by myself and task in process') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"yellow task_test_dev"'><?= t('Created by myself and task test dev') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"purple task_update_prod"'><?= t('Created by myself and task update prod') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"green task_done"'><?= t('Created by myself and task done') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me color:"brown actually_not_neccessary"'><?= t('Created by myself and actually not neccessary') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='creator:me status:closed'><?= t('Created by myself and closed') ?></a></li>

        <li class="separator"><hr></li>

        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"red task_open"'><?= t('My open tasks') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"blue task_in_process"'><?= t('My tasks in process') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"yellow task_test_dev"'><?= t('My tasks in Test DEV') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"purple task_update_prod"'><?= t('My tasks in Update PROD') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"green task_done"'><?= t('My completed tasks') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me color:"brown actually_not_neccessary"'><?= t('Actually not neccessary') ?></a></li>
        <li><a href="#" class="filter-helper" data-filter='assignee:me status:closed'><?= t('My closed tasks') ?></a></li>
    </ul>
</div>
