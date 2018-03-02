<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<div class="container" style="margin-top:30px;">
    <div class="row">
        <div class="col-lg-4">
            <ul class="list-group">
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= __('Actions') ?></li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
                <li class="list-group-item d-flex justify-content-between align-items-center"><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
                <li  class="list-group-item d-flex justify-content-between align-items-center"><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?> </li>
                <li  class="list-group-item d-flex justify-content-between align-items-center"><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
            </ul>
        </div>
        <div class="col-lg-8">
            <div class="card mb-3">
              <h3 class="card-header"><?= __('Email') ?>: <?= h($user->email) ?></h3>
              <div class="card-body">
                <h5 class="card-title">Id : <?= h($user->id) ?></h5>
                <h6 class="card-subtitle text-muted"><?= h($user->phone) ?></h6>
              </div>
              <img style="height: 200px; width: 100%; display: block;" src="data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22318%22%20height%3D%22180%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20318%20180%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_158bd1d28ef%20text%20%7B%20fill%3Argba(255%2C255%2C255%2C.75)%3Bfont-weight%3Anormal%3Bfont-family%3AHelvetica%2C%20monospace%3Bfont-size%3A16pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_158bd1d28ef%22%3E%3Crect%20width%3D%22318%22%20height%3D%22180%22%20fill%3D%22%23777%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%22129.359375%22%20y%3D%2297.35%22%3EImage%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E" alt="Card image">
              <div class="card-body">
                <p class="card-text"><?= __('Created') ?>: <?= h($user->created) ?></p>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item">Cras justo odio</li>
                <li class="list-group-item">Dapibus ac facilisis in</li>
                <li class="list-group-item">Vestibulum at eros</li>
              </ul>
              <div class="card-body">
                <a href="#" class="card-link">Card link</a>
                <a href="#" class="card-link">Another link</a>
              </div>
              <div class="card-footer text-muted">
                <?= __('Modified') ?>:
                <?= h($user->modified) ?>
              </div>
            </div>
            
        </div>
    </div>
</div>
