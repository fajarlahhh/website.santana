<div>
    <div class="content-header">
        <div class="container-fluid">
            <h1 class="m-0">{{ $key ? 'Edit' : 'New' }} Service</h1>
        </div>
    </div>

    <section class="content">
        <div class="container-fluid">
            <form wire:submit.prevent="submit">
                <div class="card card-default">
                    <div class="card-header">
                        Form
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="control-label">Title</label>
                            <input class="form-control" type="text" autocomplete="off" wire:model="title" />
                            @error('title')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label class="control-label">Icon</label>
                            <div wire:ignore>
                                <select name="" class="form-control selectpicker" data-live-search="true"
                                    id="" wire:model="icon">
                                    <option value="bi-123" data-icon="bi-123">bi-123</option>
                                        <option value="bi-123" data-icon="bi-123">bi-123</option>
                                        <option value="bi-alarm-fill" data-icon="bi-alarm-fill">bi-alarm-fill</option>
                                        <option value="bi-alarm" data-icon="bi-alarm">bi-alarm</option>
                                        <option value="bi-align-bottom" data-icon="bi-align-bottom">bi-align-bottom</option>
                                        <option value="bi-align-center" data-icon="bi-align-center">bi-align-center</option>
                                        <option value="bi-align-end" data-icon="bi-align-end">bi-align-end</option>
                                        <option value="bi-align-middle" data-icon="bi-align-middle">bi-align-middle</option>
                                        <option value="bi-align-start" data-icon="bi-align-start">bi-align-start</option>
                                        <option value="bi-align-top" data-icon="bi-align-top">bi-align-top</option>
                                        <option value="bi-alt" data-icon="bi-alt">bi-alt</option>
                                        <option value="bi-app-indicator" data-icon="bi-app-indicator">bi-app-indicator</option>
                                        <option value="bi-app" data-icon="bi-app">bi-app</option>
                                        <option value="bi-archive-fill" data-icon="bi-archive-fill">bi-archive-fill</option>
                                        <option value="bi-archive" data-icon="bi-archive">bi-archive</option>
                                        <option value="bi-arrow-90deg-down" data-icon="bi-arrow-90deg-down">bi-arrow-90deg-down</option>
                                        <option value="bi-arrow-90deg-left" data-icon="bi-arrow-90deg-left">bi-arrow-90deg-left</option>
                                        <option value="bi-arrow-90deg-right" data-icon="bi-arrow-90deg-right">bi-arrow-90deg-right</option>
                                        <option value="bi-arrow-90deg-up" data-icon="bi-arrow-90deg-up">bi-arrow-90deg-up</option>
                                        <option value="bi-arrow-bar-down" data-icon="bi-arrow-bar-down">bi-arrow-bar-down</option>
                                        <option value="bi-arrow-bar-left" data-icon="bi-arrow-bar-left">bi-arrow-bar-left</option>
                                        <option value="bi-arrow-bar-right" data-icon="bi-arrow-bar-right">bi-arrow-bar-right</option>
                                        <option value="bi-arrow-bar-up" data-icon="bi-arrow-bar-up">bi-arrow-bar-up</option>
                                        <option value="bi-arrow-clockwise" data-icon="bi-arrow-clockwise">bi-arrow-clockwise</option>
                                        <option value="bi-arrow-counterclockwise" data-icon="bi-arrow-counterclockwise">bi-arrow-counterclockwise</option>
                                        <option value="bi-arrow-down-circle-fill" data-icon="bi-arrow-down-circle-fill">bi-arrow-down-circle-fill</option>
                                        <option value="bi-arrow-down-circle" data-icon="bi-arrow-down-circle">bi-arrow-down-circle</option>
                                        <option value="bi-arrow-down-left-circle-fill" data-icon="bi-arrow-down-left-circle-fill">bi-arrow-down-left-circle-fill</option>
                                        <option value="bi-arrow-down-left-circle" data-icon="bi-arrow-down-left-circle">bi-arrow-down-left-circle</option>
                                        <option value="bi-arrow-down-left-square-fill" data-icon="bi-arrow-down-left-square-fill">bi-arrow-down-left-square-fill</option>
                                        <option value="bi-arrow-down-left-square" data-icon="bi-arrow-down-left-square">bi-arrow-down-left-square</option>
                                        <option value="bi-arrow-down-left" data-icon="bi-arrow-down-left">bi-arrow-down-left</option>
                                        <option value="bi-arrow-down-right-circle-fill" data-icon="bi-arrow-down-right-circle-fill">bi-arrow-down-right-circle-fill</option>
                                        <option value="bi-arrow-down-right-circle" data-icon="bi-arrow-down-right-circle">bi-arrow-down-right-circle</option>
                                        <option value="bi-arrow-down-right-square-fill" data-icon="bi-arrow-down-right-square-fill">bi-arrow-down-right-square-fill</option>
                                        <option value="bi-arrow-down-right-square" data-icon="bi-arrow-down-right-square">bi-arrow-down-right-square</option>
                                        <option value="bi-arrow-down-right" data-icon="bi-arrow-down-right">bi-arrow-down-right</option>
                                        <option value="bi-arrow-down-short" data-icon="bi-arrow-down-short">bi-arrow-down-short</option>
                                        <option value="bi-arrow-down-square-fill" data-icon="bi-arrow-down-square-fill">bi-arrow-down-square-fill</option>
                                        <option value="bi-arrow-down-square" data-icon="bi-arrow-down-square">bi-arrow-down-square</option>
                                        <option value="bi-arrow-down-up" data-icon="bi-arrow-down-up">bi-arrow-down-up</option>
                                        <option value="bi-arrow-down" data-icon="bi-arrow-down">bi-arrow-down</option>
                                        <option value="bi-arrow-left-circle-fill" data-icon="bi-arrow-left-circle-fill">bi-arrow-left-circle-fill</option>
                                        <option value="bi-arrow-left-circle" data-icon="bi-arrow-left-circle">bi-arrow-left-circle</option>
                                        <option value="bi-arrow-left-right" data-icon="bi-arrow-left-right">bi-arrow-left-right</option>
                                        <option value="bi-arrow-left-short" data-icon="bi-arrow-left-short">bi-arrow-left-short</option>
                                        <option value="bi-arrow-left-square-fill" data-icon="bi-arrow-left-square-fill">bi-arrow-left-square-fill</option>
                                        <option value="bi-arrow-left-square" data-icon="bi-arrow-left-square">bi-arrow-left-square</option>
                                        <option value="bi-arrow-left" data-icon="bi-arrow-left">bi-arrow-left</option>
                                        <option value="bi-arrow-repeat" data-icon="bi-arrow-repeat">bi-arrow-repeat</option>
                                        <option value="bi-arrow-return-left" data-icon="bi-arrow-return-left">bi-arrow-return-left</option>
                                        <option value="bi-arrow-return-right" data-icon="bi-arrow-return-right">bi-arrow-return-right</option>
                                        <option value="bi-arrow-right-circle-fill" data-icon="bi-arrow-right-circle-fill">bi-arrow-right-circle-fill</option>
                                        <option value="bi-arrow-right-circle" data-icon="bi-arrow-right-circle">bi-arrow-right-circle</option>
                                        <option value="bi-arrow-right-short" data-icon="bi-arrow-right-short">bi-arrow-right-short</option>
                                        <option value="bi-arrow-right-square-fill" data-icon="bi-arrow-right-square-fill">bi-arrow-right-square-fill</option>
                                        <option value="bi-arrow-right-square" data-icon="bi-arrow-right-square">bi-arrow-right-square</option>
                                        <option value="bi-arrow-right" data-icon="bi-arrow-right">bi-arrow-right</option>
                                        <option value="bi-arrow-up-circle-fill" data-icon="bi-arrow-up-circle-fill">bi-arrow-up-circle-fill</option>
                                        <option value="bi-arrow-up-circle" data-icon="bi-arrow-up-circle">bi-arrow-up-circle</option>
                                        <option value="bi-arrow-up-left-circle-fill" data-icon="bi-arrow-up-left-circle-fill">bi-arrow-up-left-circle-fill</option>
                                        <option value="bi-arrow-up-left-circle" data-icon="bi-arrow-up-left-circle">bi-arrow-up-left-circle</option>
                                        <option value="bi-arrow-up-left-square-fill" data-icon="bi-arrow-up-left-square-fill">bi-arrow-up-left-square-fill</option>
                                        <option value="bi-arrow-up-left-square" data-icon="bi-arrow-up-left-square">bi-arrow-up-left-square</option>
                                        <option value="bi-arrow-up-left" data-icon="bi-arrow-up-left">bi-arrow-up-left</option>
                                        <option value="bi-arrow-up-right-circle-fill" data-icon="bi-arrow-up-right-circle-fill">bi-arrow-up-right-circle-fill</option>
                                        <option value="bi-arrow-up-right-circle" data-icon="bi-arrow-up-right-circle">bi-arrow-up-right-circle</option>
                                        <option value="bi-arrow-up-right-square-fill" data-icon="bi-arrow-up-right-square-fill">bi-arrow-up-right-square-fill</option>
                                        <option value="bi-arrow-up-right-square" data-icon="bi-arrow-up-right-square">bi-arrow-up-right-square</option>
                                        <option value="bi-arrow-up-right" data-icon="bi-arrow-up-right">bi-arrow-up-right</option>
                                        <option value="bi-arrow-up-short" data-icon="bi-arrow-up-short">bi-arrow-up-short</option>
                                        <option value="bi-arrow-up-square-fill" data-icon="bi-arrow-up-square-fill">bi-arrow-up-square-fill</option>
                                        <option value="bi-arrow-up-square" data-icon="bi-arrow-up-square">bi-arrow-up-square</option>
                                        <option value="bi-arrow-up" data-icon="bi-arrow-up">bi-arrow-up</option>
                                        <option value="bi-arrows-angle-contract" data-icon="bi-arrows-angle-contract">bi-arrows-angle-contract</option>
                                        <option value="bi-arrows-angle-expand" data-icon="bi-arrows-angle-expand">bi-arrows-angle-expand</option>
                                        <option value="bi-arrows-collapse" data-icon="bi-arrows-collapse">bi-arrows-collapse</option>
                                        <option value="bi-arrows-expand" data-icon="bi-arrows-expand">bi-arrows-expand</option>
                                        <option value="bi-arrows-fullscreen" data-icon="bi-arrows-fullscreen">bi-arrows-fullscreen</option>
                                        <option value="bi-arrows-move" data-icon="bi-arrows-move">bi-arrows-move</option>
                                        <option value="bi-aspect-ratio-fill" data-icon="bi-aspect-ratio-fill">bi-aspect-ratio-fill</option>
                                        <option value="bi-aspect-ratio" data-icon="bi-aspect-ratio">bi-aspect-ratio</option>
                                        <option value="bi-asterisk" data-icon="bi-asterisk">bi-asterisk</option>
                                        <option value="bi-at" data-icon="bi-at">bi-at</option>
                                        <option value="bi-award-fill" data-icon="bi-award-fill">bi-award-fill</option>
                                        <option value="bi-award" data-icon="bi-award">bi-award</option>
                                        <option value="bi-back" data-icon="bi-back">bi-back</option>
                                        <option value="bi-backspace-fill" data-icon="bi-backspace-fill">bi-backspace-fill</option>
                                        <option value="bi-backspace-reverse-fill" data-icon="bi-backspace-reverse-fill">bi-backspace-reverse-fill</option>
                                        <option value="bi-backspace-reverse" data-icon="bi-backspace-reverse">bi-backspace-reverse</option>
                                        <option value="bi-backspace" data-icon="bi-backspace">bi-backspace</option>
                                        <option value="bi-badge-3d-fill" data-icon="bi-badge-3d-fill">bi-badge-3d-fill</option>
                                        <option value="bi-badge-3d" data-icon="bi-badge-3d">bi-badge-3d</option>
                                        <option value="bi-badge-4k-fill" data-icon="bi-badge-4k-fill">bi-badge-4k-fill</option>
                                        <option value="bi-badge-4k" data-icon="bi-badge-4k">bi-badge-4k</option>
                                        <option value="bi-badge-8k-fill" data-icon="bi-badge-8k-fill">bi-badge-8k-fill</option>
                                        <option value="bi-badge-8k" data-icon="bi-badge-8k">bi-badge-8k</option>
                                        <option value="bi-badge-ad-fill" data-icon="bi-badge-ad-fill">bi-badge-ad-fill</option>
                                        <option value="bi-badge-ad" data-icon="bi-badge-ad">bi-badge-ad</option>
                                        <option value="bi-badge-ar-fill" data-icon="bi-badge-ar-fill">bi-badge-ar-fill</option>
                                        <option value="bi-badge-ar" data-icon="bi-badge-ar">bi-badge-ar</option>
                                        <option value="bi-badge-cc-fill" data-icon="bi-badge-cc-fill">bi-badge-cc-fill</option>
                                        <option value="bi-badge-cc" data-icon="bi-badge-cc">bi-badge-cc</option>
                                        <option value="bi-badge-hd-fill" data-icon="bi-badge-hd-fill">bi-badge-hd-fill</option>
                                        <option value="bi-badge-hd" data-icon="bi-badge-hd">bi-badge-hd</option>
                                        <option value="bi-badge-tm-fill" data-icon="bi-badge-tm-fill">bi-badge-tm-fill</option>
                                        <option value="bi-badge-tm" data-icon="bi-badge-tm">bi-badge-tm</option>
                                        <option value="bi-badge-vo-fill" data-icon="bi-badge-vo-fill">bi-badge-vo-fill</option>
                                        <option value="bi-badge-vo" data-icon="bi-badge-vo">bi-badge-vo</option>
                                        <option value="bi-badge-vr-fill" data-icon="bi-badge-vr-fill">bi-badge-vr-fill</option>
                                        <option value="bi-badge-vr" data-icon="bi-badge-vr">bi-badge-vr</option>
                                        <option value="bi-badge-wc-fill" data-icon="bi-badge-wc-fill">bi-badge-wc-fill</option>
                                        <option value="bi-badge-wc" data-icon="bi-badge-wc">bi-badge-wc</option>
                                        <option value="bi-bag-check-fill" data-icon="bi-bag-check-fill">bi-bag-check-fill</option>
                                        <option value="bi-bag-check" data-icon="bi-bag-check">bi-bag-check</option>
                                        <option value="bi-bag-dash-fill" data-icon="bi-bag-dash-fill">bi-bag-dash-fill</option>
                                        <option value="bi-bag-dash" data-icon="bi-bag-dash">bi-bag-dash</option>
                                        <option value="bi-bag-fill" data-icon="bi-bag-fill">bi-bag-fill</option>
                                        <option value="bi-bag-plus-fill" data-icon="bi-bag-plus-fill">bi-bag-plus-fill</option>
                                        <option value="bi-bag-plus" data-icon="bi-bag-plus">bi-bag-plus</option>
                                        <option value="bi-bag-x-fill" data-icon="bi-bag-x-fill">bi-bag-x-fill</option>
                                        <option value="bi-bag-x" data-icon="bi-bag-x">bi-bag-x</option>
                                        <option value="bi-bag" data-icon="bi-bag">bi-bag</option>
                                        <option value="bi-bar-chart-fill" data-icon="bi-bar-chart-fill">bi-bar-chart-fill</option>
                                        <option value="bi-bar-chart-line-fill" data-icon="bi-bar-chart-line-fill">bi-bar-chart-line-fill</option>
                                        <option value="bi-bar-chart-line" data-icon="bi-bar-chart-line">bi-bar-chart-line</option>
                                        <option value="bi-bar-chart-steps" data-icon="bi-bar-chart-steps">bi-bar-chart-steps</option>
                                        <option value="bi-bar-chart" data-icon="bi-bar-chart">bi-bar-chart</option>
                                        <option value="bi-basket-fill" data-icon="bi-basket-fill">bi-basket-fill</option>
                                        <option value="bi-basket" data-icon="bi-basket">bi-basket</option>
                                        <option value="bi-basket2-fill" data-icon="bi-basket2-fill">bi-basket2-fill</option>
                                        <option value="bi-basket2" data-icon="bi-basket2">bi-basket2</option>
                                        <option value="bi-basket3-fill" data-icon="bi-basket3-fill">bi-basket3-fill</option>
                                        <option value="bi-basket3" data-icon="bi-basket3">bi-basket3</option>
                                        <option value="bi-battery-charging" data-icon="bi-battery-charging">bi-battery-charging</option>
                                        <option value="bi-battery-full" data-icon="bi-battery-full">bi-battery-full</option>
                                        <option value="bi-battery-half" data-icon="bi-battery-half">bi-battery-half</option>
                                        <option value="bi-battery" data-icon="bi-battery">bi-battery</option>
                                        <option value="bi-bell-fill" data-icon="bi-bell-fill">bi-bell-fill</option>
                                        <option value="bi-bell" data-icon="bi-bell">bi-bell</option>
                                        <option value="bi-bezier" data-icon="bi-bezier">bi-bezier</option>
                                        <option value="bi-bezier2" data-icon="bi-bezier2">bi-bezier2</option>
                                        <option value="bi-bicycle" data-icon="bi-bicycle">bi-bicycle</option>
                                        <option value="bi-binoculars-fill" data-icon="bi-binoculars-fill">bi-binoculars-fill</option>
                                        <option value="bi-binoculars" data-icon="bi-binoculars">bi-binoculars</option>
                                        <option value="bi-blockquote-left" data-icon="bi-blockquote-left">bi-blockquote-left</option>
                                        <option value="bi-blockquote-right" data-icon="bi-blockquote-right">bi-blockquote-right</option>
                                        <option value="bi-book-fill" data-icon="bi-book-fill">bi-book-fill</option>
                                        <option value="bi-book-half" data-icon="bi-book-half">bi-book-half</option>
                                        <option value="bi-book" data-icon="bi-book">bi-book</option>
                                        <option value="bi-bookmark-check-fill" data-icon="bi-bookmark-check-fill">bi-bookmark-check-fill</option>
                                        <option value="bi-bookmark-check" data-icon="bi-bookmark-check">bi-bookmark-check</option>
                                        <option value="bi-bookmark-dash-fill" data-icon="bi-bookmark-dash-fill">bi-bookmark-dash-fill</option>
                                        <option value="bi-bookmark-dash" data-icon="bi-bookmark-dash">bi-bookmark-dash</option>
                                        <option value="bi-bookmark-fill" data-icon="bi-bookmark-fill">bi-bookmark-fill</option>
                                        <option value="bi-bookmark-heart-fill" data-icon="bi-bookmark-heart-fill">bi-bookmark-heart-fill</option>
                                        <option value="bi-bookmark-heart" data-icon="bi-bookmark-heart">bi-bookmark-heart</option>
                                        <option value="bi-bookmark-plus-fill" data-icon="bi-bookmark-plus-fill">bi-bookmark-plus-fill</option>
                                        <option value="bi-bookmark-plus" data-icon="bi-bookmark-plus">bi-bookmark-plus</option>
                                        <option value="bi-bookmark-star-fill" data-icon="bi-bookmark-star-fill">bi-bookmark-star-fill</option>
                                        <option value="bi-bookmark-star" data-icon="bi-bookmark-star">bi-bookmark-star</option>
                                        <option value="bi-bookmark-x-fill" data-icon="bi-bookmark-x-fill">bi-bookmark-x-fill</option>
                                        <option value="bi-bookmark-x" data-icon="bi-bookmark-x">bi-bookmark-x</option>
                                        <option value="bi-bookmark" data-icon="bi-bookmark">bi-bookmark</option>
                                        <option value="bi-bookmarks-fill" data-icon="bi-bookmarks-fill">bi-bookmarks-fill</option>
                                        <option value="bi-bookmarks" data-icon="bi-bookmarks">bi-bookmarks</option>
                                        <option value="bi-bookshelf" data-icon="bi-bookshelf">bi-bookshelf</option>
                                        <option value="bi-bootstrap-fill" data-icon="bi-bootstrap-fill">bi-bootstrap-fill</option>
                                        <option value="bi-bootstrap-reboot" data-icon="bi-bootstrap-reboot">bi-bootstrap-reboot</option>
                                        <option value="bi-bootstrap" data-icon="bi-bootstrap">bi-bootstrap</option>
                                        <option value="bi-border-all" data-icon="bi-border-all">bi-border-all</option>
                                        <option value="bi-border-bottom" data-icon="bi-border-bottom">bi-border-bottom</option>
                                        <option value="bi-border-center" data-icon="bi-border-center">bi-border-center</option>
                                        <option value="bi-border-inner" data-icon="bi-border-inner">bi-border-inner</option>
                                        <option value="bi-border-left" data-icon="bi-border-left">bi-border-left</option>
                                        <option value="bi-border-middle" data-icon="bi-border-middle">bi-border-middle</option>
                                        <option value="bi-border-outer" data-icon="bi-border-outer">bi-border-outer</option>
                                        <option value="bi-border-right" data-icon="bi-border-right">bi-border-right</option>
                                        <option value="bi-border-style" data-icon="bi-border-style">bi-border-style</option>
                                        <option value="bi-border-top" data-icon="bi-border-top">bi-border-top</option>
                                        <option value="bi-border-width" data-icon="bi-border-width">bi-border-width</option>
                                        <option value="bi-border" data-icon="bi-border">bi-border</option>
                                        <option value="bi-bounding-box-circles" data-icon="bi-bounding-box-circles">bi-bounding-box-circles</option>
                                        <option value="bi-bounding-box" data-icon="bi-bounding-box">bi-bounding-box</option>
                                        <option value="bi-box-arrow-down-left" data-icon="bi-box-arrow-down-left">bi-box-arrow-down-left</option>
                                        <option value="bi-box-arrow-down-right" data-icon="bi-box-arrow-down-right">bi-box-arrow-down-right</option>
                                        <option value="bi-box-arrow-down" data-icon="bi-box-arrow-down">bi-box-arrow-down</option>
                                        <option value="bi-box-arrow-in-down-left" data-icon="bi-box-arrow-in-down-left">bi-box-arrow-in-down-left</option>
                                        <option value="bi-box-arrow-in-down-right" data-icon="bi-box-arrow-in-down-right">bi-box-arrow-in-down-right</option>
                                        <option value="bi-box-arrow-in-down" data-icon="bi-box-arrow-in-down">bi-box-arrow-in-down</option>
                                        <option value="bi-box-arrow-in-left" data-icon="bi-box-arrow-in-left">bi-box-arrow-in-left</option>
                                        <option value="bi-box-arrow-in-right" data-icon="bi-box-arrow-in-right">bi-box-arrow-in-right</option>
                                        <option value="bi-box-arrow-in-up-left" data-icon="bi-box-arrow-in-up-left">bi-box-arrow-in-up-left</option>
                                        <option value="bi-box-arrow-in-up-right" data-icon="bi-box-arrow-in-up-right">bi-box-arrow-in-up-right</option>
                                        <option value="bi-box-arrow-in-up" data-icon="bi-box-arrow-in-up">bi-box-arrow-in-up</option>
                                        <option value="bi-box-arrow-left" data-icon="bi-box-arrow-left">bi-box-arrow-left</option>
                                        <option value="bi-box-arrow-right" data-icon="bi-box-arrow-right">bi-box-arrow-right</option>
                                        <option value="bi-box-arrow-up-left" data-icon="bi-box-arrow-up-left">bi-box-arrow-up-left</option>
                                        <option value="bi-box-arrow-up-right" data-icon="bi-box-arrow-up-right">bi-box-arrow-up-right</option>
                                        <option value="bi-box-arrow-up" data-icon="bi-box-arrow-up">bi-box-arrow-up</option>
                                        <option value="bi-box-seam" data-icon="bi-box-seam">bi-box-seam</option>
                                        <option value="bi-box" data-icon="bi-box">bi-box</option>
                                        <option value="bi-braces" data-icon="bi-braces">bi-braces</option>
                                        <option value="bi-bricks" data-icon="bi-bricks">bi-bricks</option>
                                        <option value="bi-briefcase-fill" data-icon="bi-briefcase-fill">bi-briefcase-fill</option>
                                        <option value="bi-briefcase" data-icon="bi-briefcase">bi-briefcase</option>
                                        <option value="bi-brightness-alt-high-fill" data-icon="bi-brightness-alt-high-fill">bi-brightness-alt-high-fill</option>
                                        <option value="bi-brightness-alt-high" data-icon="bi-brightness-alt-high">bi-brightness-alt-high</option>
                                        <option value="bi-brightness-alt-low-fill" data-icon="bi-brightness-alt-low-fill">bi-brightness-alt-low-fill</option>
                                        <option value="bi-brightness-alt-low" data-icon="bi-brightness-alt-low">bi-brightness-alt-low</option>
                                        <option value="bi-brightness-high-fill" data-icon="bi-brightness-high-fill">bi-brightness-high-fill</option>
                                        <option value="bi-brightness-high" data-icon="bi-brightness-high">bi-brightness-high</option>
                                        <option value="bi-brightness-low-fill" data-icon="bi-brightness-low-fill">bi-brightness-low-fill</option>
                                        <option value="bi-brightness-low" data-icon="bi-brightness-low">bi-brightness-low</option>
                                        <option value="bi-broadcast-pin" data-icon="bi-broadcast-pin">bi-broadcast-pin</option>
                                        <option value="bi-broadcast" data-icon="bi-broadcast">bi-broadcast</option>
                                        <option value="bi-brush-fill" data-icon="bi-brush-fill">bi-brush-fill</option>
                                        <option value="bi-brush" data-icon="bi-brush">bi-brush</option>
                                        <option value="bi-bucket-fill" data-icon="bi-bucket-fill">bi-bucket-fill</option>
                                        <option value="bi-bucket" data-icon="bi-bucket">bi-bucket</option>
                                        <option value="bi-bug-fill" data-icon="bi-bug-fill">bi-bug-fill</option>
                                        <option value="bi-bug" data-icon="bi-bug">bi-bug</option>
                                        <option value="bi-building" data-icon="bi-building">bi-building</option>
                                        <option value="bi-bullseye" data-icon="bi-bullseye">bi-bullseye</option>
                                        <option value="bi-calculator-fill" data-icon="bi-calculator-fill">bi-calculator-fill</option>
                                        <option value="bi-calculator" data-icon="bi-calculator">bi-calculator</option>
                                        <option value="bi-calendar-check-fill" data-icon="bi-calendar-check-fill">bi-calendar-check-fill</option>
                                        <option value="bi-calendar-check" data-icon="bi-calendar-check">bi-calendar-check</option>
                                        <option value="bi-calendar-date-fill" data-icon="bi-calendar-date-fill">bi-calendar-date-fill</option>
                                        <option value="bi-calendar-date" data-icon="bi-calendar-date">bi-calendar-date</option>
                                        <option value="bi-calendar-day-fill" data-icon="bi-calendar-day-fill">bi-calendar-day-fill</option>
                                        <option value="bi-calendar-day" data-icon="bi-calendar-day">bi-calendar-day</option>
                                        <option value="bi-calendar-event-fill" data-icon="bi-calendar-event-fill">bi-calendar-event-fill</option>
                                        <option value="bi-calendar-event" data-icon="bi-calendar-event">bi-calendar-event</option>
                                        <option value="bi-calendar-fill" data-icon="bi-calendar-fill">bi-calendar-fill</option>
                                        <option value="bi-calendar-minus-fill" data-icon="bi-calendar-minus-fill">bi-calendar-minus-fill</option>
                                        <option value="bi-calendar-minus" data-icon="bi-calendar-minus">bi-calendar-minus</option>
                                        <option value="bi-calendar-month-fill" data-icon="bi-calendar-month-fill">bi-calendar-month-fill</option>
                                        <option value="bi-calendar-month" data-icon="bi-calendar-month">bi-calendar-month</option>
                                        <option value="bi-calendar-plus-fill" data-icon="bi-calendar-plus-fill">bi-calendar-plus-fill</option>
                                        <option value="bi-calendar-plus" data-icon="bi-calendar-plus">bi-calendar-plus</option>
                                        <option value="bi-calendar-range-fill" data-icon="bi-calendar-range-fill">bi-calendar-range-fill</option>
                                        <option value="bi-calendar-range" data-icon="bi-calendar-range">bi-calendar-range</option>
                                        <option value="bi-calendar-week-fill" data-icon="bi-calendar-week-fill">bi-calendar-week-fill</option>
                                        <option value="bi-calendar-week" data-icon="bi-calendar-week">bi-calendar-week</option>
                                        <option value="bi-calendar-x-fill" data-icon="bi-calendar-x-fill">bi-calendar-x-fill</option>
                                        <option value="bi-calendar-x" data-icon="bi-calendar-x">bi-calendar-x</option>
                                        <option value="bi-calendar" data-icon="bi-calendar">bi-calendar</option>
                                        <option value="bi-calendar2-check-fill" data-icon="bi-calendar2-check-fill">bi-calendar2-check-fill</option>
                                        <option value="bi-calendar2-check" data-icon="bi-calendar2-check">bi-calendar2-check</option>
                                        <option value="bi-calendar2-date-fill" data-icon="bi-calendar2-date-fill">bi-calendar2-date-fill</option>
                                        <option value="bi-calendar2-date" data-icon="bi-calendar2-date">bi-calendar2-date</option>
                                        <option value="bi-calendar2-day-fill" data-icon="bi-calendar2-day-fill">bi-calendar2-day-fill</option>
                                        <option value="bi-calendar2-day" data-icon="bi-calendar2-day">bi-calendar2-day</option>
                                        <option value="bi-calendar2-event-fill" data-icon="bi-calendar2-event-fill">bi-calendar2-event-fill</option>
                                        <option value="bi-calendar2-event" data-icon="bi-calendar2-event">bi-calendar2-event</option>
                                        <option value="bi-calendar2-fill" data-icon="bi-calendar2-fill">bi-calendar2-fill</option>
                                        <option value="bi-calendar2-minus-fill" data-icon="bi-calendar2-minus-fill">bi-calendar2-minus-fill</option>
                                        <option value="bi-calendar2-minus" data-icon="bi-calendar2-minus">bi-calendar2-minus</option>
                                        <option value="bi-calendar2-month-fill" data-icon="bi-calendar2-month-fill">bi-calendar2-month-fill</option>
                                        <option value="bi-calendar2-month" data-icon="bi-calendar2-month">bi-calendar2-month</option>
                                        <option value="bi-calendar2-plus-fill" data-icon="bi-calendar2-plus-fill">bi-calendar2-plus-fill</option>
                                        <option value="bi-calendar2-plus" data-icon="bi-calendar2-plus">bi-calendar2-plus</option>
                                        <option value="bi-calendar2-range-fill" data-icon="bi-calendar2-range-fill">bi-calendar2-range-fill</option>
                                        <option value="bi-calendar2-range" data-icon="bi-calendar2-range">bi-calendar2-range</option>
                                        <option value="bi-calendar2-week-fill" data-icon="bi-calendar2-week-fill">bi-calendar2-week-fill</option>
                                        <option value="bi-calendar2-week" data-icon="bi-calendar2-week">bi-calendar2-week</option>
                                        <option value="bi-calendar2-x-fill" data-icon="bi-calendar2-x-fill">bi-calendar2-x-fill</option>
                                        <option value="bi-calendar2-x" data-icon="bi-calendar2-x">bi-calendar2-x</option>
                                        <option value="bi-calendar2" data-icon="bi-calendar2">bi-calendar2</option>
                                        <option value="bi-calendar3-event-fill" data-icon="bi-calendar3-event-fill">bi-calendar3-event-fill</option>
                                        <option value="bi-calendar3-event" data-icon="bi-calendar3-event">bi-calendar3-event</option>
                                        <option value="bi-calendar3-fill" data-icon="bi-calendar3-fill">bi-calendar3-fill</option>
                                        <option value="bi-calendar3-range-fill" data-icon="bi-calendar3-range-fill">bi-calendar3-range-fill</option>
                                        <option value="bi-calendar3-range" data-icon="bi-calendar3-range">bi-calendar3-range</option>
                                        <option value="bi-calendar3-week-fill" data-icon="bi-calendar3-week-fill">bi-calendar3-week-fill</option>
                                        <option value="bi-calendar3-week" data-icon="bi-calendar3-week">bi-calendar3-week</option>
                                        <option value="bi-calendar3" data-icon="bi-calendar3">bi-calendar3</option>
                                        <option value="bi-calendar4-event" data-icon="bi-calendar4-event">bi-calendar4-event</option>
                                        <option value="bi-calendar4-range" data-icon="bi-calendar4-range">bi-calendar4-range</option>
                                        <option value="bi-calendar4-week" data-icon="bi-calendar4-week">bi-calendar4-week</option>
                                        <option value="bi-calendar4" data-icon="bi-calendar4">bi-calendar4</option>
                                        <option value="bi-camera-fill" data-icon="bi-camera-fill">bi-camera-fill</option>
                                        <option value="bi-camera-reels-fill" data-icon="bi-camera-reels-fill">bi-camera-reels-fill</option>
                                        <option value="bi-camera-reels" data-icon="bi-camera-reels">bi-camera-reels</option>
                                        <option value="bi-camera-video-fill" data-icon="bi-camera-video-fill">bi-camera-video-fill</option>
                                        <option value="bi-camera-video-off-fill" data-icon="bi-camera-video-off-fill">bi-camera-video-off-fill</option>
                                        <option value="bi-camera-video-off" data-icon="bi-camera-video-off">bi-camera-video-off</option>
                                        <option value="bi-camera-video" data-icon="bi-camera-video">bi-camera-video</option>
                                        <option value="bi-camera" data-icon="bi-camera">bi-camera</option>
                                        <option value="bi-camera2" data-icon="bi-camera2">bi-camera2</option>
                                        <option value="bi-capslock-fill" data-icon="bi-capslock-fill">bi-capslock-fill</option>
                                        <option value="bi-capslock" data-icon="bi-capslock">bi-capslock</option>
                                        <option value="bi-card-checklist" data-icon="bi-card-checklist">bi-card-checklist</option>
                                        <option value="bi-card-heading" data-icon="bi-card-heading">bi-card-heading</option>
                                        <option value="bi-card-image" data-icon="bi-card-image">bi-card-image</option>
                                        <option value="bi-card-list" data-icon="bi-card-list">bi-card-list</option>
                                        <option value="bi-card-text" data-icon="bi-card-text">bi-card-text</option>
                                        <option value="bi-caret-down-fill" data-icon="bi-caret-down-fill">bi-caret-down-fill</option>
                                        <option value="bi-caret-down-square-fill" data-icon="bi-caret-down-square-fill">bi-caret-down-square-fill</option>
                                        <option value="bi-caret-down-square" data-icon="bi-caret-down-square">bi-caret-down-square</option>
                                        <option value="bi-caret-down" data-icon="bi-caret-down">bi-caret-down</option>
                                        <option value="bi-caret-left-fill" data-icon="bi-caret-left-fill">bi-caret-left-fill</option>
                                        <option value="bi-caret-left-square-fill" data-icon="bi-caret-left-square-fill">bi-caret-left-square-fill</option>
                                        <option value="bi-caret-left-square" data-icon="bi-caret-left-square">bi-caret-left-square</option>
                                        <option value="bi-caret-left" data-icon="bi-caret-left">bi-caret-left</option>
                                        <option value="bi-caret-right-fill" data-icon="bi-caret-right-fill">bi-caret-right-fill</option>
                                        <option value="bi-caret-right-square-fill" data-icon="bi-caret-right-square-fill">bi-caret-right-square-fill</option>
                                        <option value="bi-caret-right-square" data-icon="bi-caret-right-square">bi-caret-right-square</option>
                                        <option value="bi-caret-right" data-icon="bi-caret-right">bi-caret-right</option>
                                        <option value="bi-caret-up-fill" data-icon="bi-caret-up-fill">bi-caret-up-fill</option>
                                        <option value="bi-caret-up-square-fill" data-icon="bi-caret-up-square-fill">bi-caret-up-square-fill</option>
                                        <option value="bi-caret-up-square" data-icon="bi-caret-up-square">bi-caret-up-square</option>
                                        <option value="bi-caret-up" data-icon="bi-caret-up">bi-caret-up</option>
                                        <option value="bi-cart-check-fill" data-icon="bi-cart-check-fill">bi-cart-check-fill</option>
                                        <option value="bi-cart-check" data-icon="bi-cart-check">bi-cart-check</option>
                                        <option value="bi-cart-dash-fill" data-icon="bi-cart-dash-fill">bi-cart-dash-fill</option>
                                        <option value="bi-cart-dash" data-icon="bi-cart-dash">bi-cart-dash</option>
                                        <option value="bi-cart-fill" data-icon="bi-cart-fill">bi-cart-fill</option>
                                        <option value="bi-cart-plus-fill" data-icon="bi-cart-plus-fill">bi-cart-plus-fill</option>
                                        <option value="bi-cart-plus" data-icon="bi-cart-plus">bi-cart-plus</option>
                                        <option value="bi-cart-x-fill" data-icon="bi-cart-x-fill">bi-cart-x-fill</option>
                                        <option value="bi-cart-x" data-icon="bi-cart-x">bi-cart-x</option>
                                        <option value="bi-cart" data-icon="bi-cart">bi-cart</option>
                                        <option value="bi-cart2" data-icon="bi-cart2">bi-cart2</option>
                                        <option value="bi-cart3" data-icon="bi-cart3">bi-cart3</option>
                                        <option value="bi-cart4" data-icon="bi-cart4">bi-cart4</option>
                                        <option value="bi-cash-stack" data-icon="bi-cash-stack">bi-cash-stack</option>
                                        <option value="bi-cash" data-icon="bi-cash">bi-cash</option>
                                        <option value="bi-cast" data-icon="bi-cast">bi-cast</option>
                                        <option value="bi-chat-dots-fill" data-icon="bi-chat-dots-fill">bi-chat-dots-fill</option>
                                        <option value="bi-chat-dots" data-icon="bi-chat-dots">bi-chat-dots</option>
                                        <option value="bi-chat-fill" data-icon="bi-chat-fill">bi-chat-fill</option>
                                        <option value="bi-chat-left-dots-fill" data-icon="bi-chat-left-dots-fill">bi-chat-left-dots-fill</option>
                                        <option value="bi-chat-left-dots" data-icon="bi-chat-left-dots">bi-chat-left-dots</option>
                                        <option value="bi-chat-left-fill" data-icon="bi-chat-left-fill">bi-chat-left-fill</option>
                                        <option value="bi-chat-left-quote-fill" data-icon="bi-chat-left-quote-fill">bi-chat-left-quote-fill</option>
                                        <option value="bi-chat-left-quote" data-icon="bi-chat-left-quote">bi-chat-left-quote</option>
                                        <option value="bi-chat-left-text-fill" data-icon="bi-chat-left-text-fill">bi-chat-left-text-fill</option>
                                        <option value="bi-chat-left-text" data-icon="bi-chat-left-text">bi-chat-left-text</option>
                                        <option value="bi-chat-left" data-icon="bi-chat-left">bi-chat-left</option>
                                        <option value="bi-chat-quote-fill" data-icon="bi-chat-quote-fill">bi-chat-quote-fill</option>
                                        <option value="bi-chat-quote" data-icon="bi-chat-quote">bi-chat-quote</option>
                                        <option value="bi-chat-right-dots-fill" data-icon="bi-chat-right-dots-fill">bi-chat-right-dots-fill</option>
                                        <option value="bi-chat-right-dots" data-icon="bi-chat-right-dots">bi-chat-right-dots</option>
                                        <option value="bi-chat-right-fill" data-icon="bi-chat-right-fill">bi-chat-right-fill</option>
                                        <option value="bi-chat-right-quote-fill" data-icon="bi-chat-right-quote-fill">bi-chat-right-quote-fill</option>
                                        <option value="bi-chat-right-quote" data-icon="bi-chat-right-quote">bi-chat-right-quote</option>
                                        <option value="bi-chat-right-text-fill" data-icon="bi-chat-right-text-fill">bi-chat-right-text-fill</option>
                                        <option value="bi-chat-right-text" data-icon="bi-chat-right-text">bi-chat-right-text</option>
                                        <option value="bi-chat-right" data-icon="bi-chat-right">bi-chat-right</option>
                                        <option value="bi-chat-square-dots-fill" data-icon="bi-chat-square-dots-fill">bi-chat-square-dots-fill</option>
                                        <option value="bi-chat-square-dots" data-icon="bi-chat-square-dots">bi-chat-square-dots</option>
                                        <option value="bi-chat-square-fill" data-icon="bi-chat-square-fill">bi-chat-square-fill</option>
                                        <option value="bi-chat-square-quote-fill" data-icon="bi-chat-square-quote-fill">bi-chat-square-quote-fill</option>
                                        <option value="bi-chat-square-quote" data-icon="bi-chat-square-quote">bi-chat-square-quote</option>
                                        <option value="bi-chat-square-text-fill" data-icon="bi-chat-square-text-fill">bi-chat-square-text-fill</option>
                                        <option value="bi-chat-square-text" data-icon="bi-chat-square-text">bi-chat-square-text</option>
                                        <option value="bi-chat-square" data-icon="bi-chat-square">bi-chat-square</option>
                                        <option value="bi-chat-text-fill" data-icon="bi-chat-text-fill">bi-chat-text-fill</option>
                                        <option value="bi-chat-text" data-icon="bi-chat-text">bi-chat-text</option>
                                        <option value="bi-chat" data-icon="bi-chat">bi-chat</option>
                                        <option value="bi-check-all" data-icon="bi-check-all">bi-check-all</option>
                                        <option value="bi-check-circle-fill" data-icon="bi-check-circle-fill">bi-check-circle-fill</option>
                                        <option value="bi-check-circle" data-icon="bi-check-circle">bi-check-circle</option>
                                        <option value="bi-check-square-fill" data-icon="bi-check-square-fill">bi-check-square-fill</option>
                                        <option value="bi-check-square" data-icon="bi-check-square">bi-check-square</option>
                                        <option value="bi-check" data-icon="bi-check">bi-check</option>
                                        <option value="bi-check2-all" data-icon="bi-check2-all">bi-check2-all</option>
                                        <option value="bi-check2-circle" data-icon="bi-check2-circle">bi-check2-circle</option>
                                        <option value="bi-check2-square" data-icon="bi-check2-square">bi-check2-square</option>
                                        <option value="bi-check2" data-icon="bi-check2">bi-check2</option>
                                        <option value="bi-chevron-bar-contract" data-icon="bi-chevron-bar-contract">bi-chevron-bar-contract</option>
                                        <option value="bi-chevron-bar-down" data-icon="bi-chevron-bar-down">bi-chevron-bar-down</option>
                                        <option value="bi-chevron-bar-expand" data-icon="bi-chevron-bar-expand">bi-chevron-bar-expand</option>
                                        <option value="bi-chevron-bar-left" data-icon="bi-chevron-bar-left">bi-chevron-bar-left</option>
                                        <option value="bi-chevron-bar-right" data-icon="bi-chevron-bar-right">bi-chevron-bar-right</option>
                                        <option value="bi-chevron-bar-up" data-icon="bi-chevron-bar-up">bi-chevron-bar-up</option>
                                        <option value="bi-chevron-compact-down" data-icon="bi-chevron-compact-down">bi-chevron-compact-down</option>
                                        <option value="bi-chevron-compact-left" data-icon="bi-chevron-compact-left">bi-chevron-compact-left</option>
                                        <option value="bi-chevron-compact-right" data-icon="bi-chevron-compact-right">bi-chevron-compact-right</option>
                                        <option value="bi-chevron-compact-up" data-icon="bi-chevron-compact-up">bi-chevron-compact-up</option>
                                        <option value="bi-chevron-contract" data-icon="bi-chevron-contract">bi-chevron-contract</option>
                                        <option value="bi-chevron-double-down" data-icon="bi-chevron-double-down">bi-chevron-double-down</option>
                                        <option value="bi-chevron-double-left" data-icon="bi-chevron-double-left">bi-chevron-double-left</option>
                                        <option value="bi-chevron-double-right" data-icon="bi-chevron-double-right">bi-chevron-double-right</option>
                                        <option value="bi-chevron-double-up" data-icon="bi-chevron-double-up">bi-chevron-double-up</option>
                                        <option value="bi-chevron-down" data-icon="bi-chevron-down">bi-chevron-down</option>
                                        <option value="bi-chevron-expand" data-icon="bi-chevron-expand">bi-chevron-expand</option>
                                        <option value="bi-chevron-left" data-icon="bi-chevron-left">bi-chevron-left</option>
                                        <option value="bi-chevron-right" data-icon="bi-chevron-right">bi-chevron-right</option>
                                        <option value="bi-chevron-up" data-icon="bi-chevron-up">bi-chevron-up</option>
                                        <option value="bi-circle-fill" data-icon="bi-circle-fill">bi-circle-fill</option>
                                        <option value="bi-circle-half" data-icon="bi-circle-half">bi-circle-half</option>
                                        <option value="bi-circle-square" data-icon="bi-circle-square">bi-circle-square</option>
                                        <option value="bi-circle" data-icon="bi-circle">bi-circle</option>
                                        <option value="bi-clipboard-check" data-icon="bi-clipboard-check">bi-clipboard-check</option>
                                        <option value="bi-clipboard-data" data-icon="bi-clipboard-data">bi-clipboard-data</option>
                                        <option value="bi-clipboard-minus" data-icon="bi-clipboard-minus">bi-clipboard-minus</option>
                                        <option value="bi-clipboard-plus" data-icon="bi-clipboard-plus">bi-clipboard-plus</option>
                                        <option value="bi-clipboard-x" data-icon="bi-clipboard-x">bi-clipboard-x</option>
                                        <option value="bi-clipboard" data-icon="bi-clipboard">bi-clipboard</option>
                                        <option value="bi-clock-fill" data-icon="bi-clock-fill">bi-clock-fill</option>
                                        <option value="bi-clock-history" data-icon="bi-clock-history">bi-clock-history</option>
                                        <option value="bi-clock" data-icon="bi-clock">bi-clock</option>
                                        <option value="bi-cloud-arrow-down-fill" data-icon="bi-cloud-arrow-down-fill">bi-cloud-arrow-down-fill</option>
                                        <option value="bi-cloud-arrow-down" data-icon="bi-cloud-arrow-down">bi-cloud-arrow-down</option>
                                        <option value="bi-cloud-arrow-up-fill" data-icon="bi-cloud-arrow-up-fill">bi-cloud-arrow-up-fill</option>
                                        <option value="bi-cloud-arrow-up" data-icon="bi-cloud-arrow-up">bi-cloud-arrow-up</option>
                                        <option value="bi-cloud-check-fill" data-icon="bi-cloud-check-fill">bi-cloud-check-fill</option>
                                        <option value="bi-cloud-check" data-icon="bi-cloud-check">bi-cloud-check</option>
                                        <option value="bi-cloud-download-fill" data-icon="bi-cloud-download-fill">bi-cloud-download-fill</option>
                                        <option value="bi-cloud-download" data-icon="bi-cloud-download">bi-cloud-download</option>
                                        <option value="bi-cloud-drizzle-fill" data-icon="bi-cloud-drizzle-fill">bi-cloud-drizzle-fill</option>
                                        <option value="bi-cloud-drizzle" data-icon="bi-cloud-drizzle">bi-cloud-drizzle</option>
                                        <option value="bi-cloud-fill" data-icon="bi-cloud-fill">bi-cloud-fill</option>
                                        <option value="bi-cloud-fog-fill" data-icon="bi-cloud-fog-fill">bi-cloud-fog-fill</option>
                                        <option value="bi-cloud-fog" data-icon="bi-cloud-fog">bi-cloud-fog</option>
                                        <option value="bi-cloud-fog2-fill" data-icon="bi-cloud-fog2-fill">bi-cloud-fog2-fill</option>
                                        <option value="bi-cloud-fog2" data-icon="bi-cloud-fog2">bi-cloud-fog2</option>
                                        <option value="bi-cloud-hail-fill" data-icon="bi-cloud-hail-fill">bi-cloud-hail-fill</option>
                                        <option value="bi-cloud-hail" data-icon="bi-cloud-hail">bi-cloud-hail</option>
                                        <option value="bi-cloud-haze-fill" data-icon="bi-cloud-haze-fill">bi-cloud-haze-fill</option>
                                        <option value="bi-cloud-haze" data-icon="bi-cloud-haze">bi-cloud-haze</option>
                                        <option value="bi-cloud-haze2-fill" data-icon="bi-cloud-haze2-fill">bi-cloud-haze2-fill</option>
                                        <option value="bi-cloud-lightning-fill" data-icon="bi-cloud-lightning-fill">bi-cloud-lightning-fill</option>
                                        <option value="bi-cloud-lightning-rain-fill" data-icon="bi-cloud-lightning-rain-fill">bi-cloud-lightning-rain-fill</option>
                                        <option value="bi-cloud-lightning-rain" data-icon="bi-cloud-lightning-rain">bi-cloud-lightning-rain</option>
                                        <option value="bi-cloud-lightning" data-icon="bi-cloud-lightning">bi-cloud-lightning</option>
                                        <option value="bi-cloud-minus-fill" data-icon="bi-cloud-minus-fill">bi-cloud-minus-fill</option>
                                        <option value="bi-cloud-minus" data-icon="bi-cloud-minus">bi-cloud-minus</option>
                                        <option value="bi-cloud-moon-fill" data-icon="bi-cloud-moon-fill">bi-cloud-moon-fill</option>
                                        <option value="bi-cloud-moon" data-icon="bi-cloud-moon">bi-cloud-moon</option>
                                        <option value="bi-cloud-plus-fill" data-icon="bi-cloud-plus-fill">bi-cloud-plus-fill</option>
                                        <option value="bi-cloud-plus" data-icon="bi-cloud-plus">bi-cloud-plus</option>
                                        <option value="bi-cloud-rain-fill" data-icon="bi-cloud-rain-fill">bi-cloud-rain-fill</option>
                                        <option value="bi-cloud-rain-heavy-fill" data-icon="bi-cloud-rain-heavy-fill">bi-cloud-rain-heavy-fill</option>
                                        <option value="bi-cloud-rain-heavy" data-icon="bi-cloud-rain-heavy">bi-cloud-rain-heavy</option>
                                        <option value="bi-cloud-rain" data-icon="bi-cloud-rain">bi-cloud-rain</option>
                                        <option value="bi-cloud-slash-fill" data-icon="bi-cloud-slash-fill">bi-cloud-slash-fill</option>
                                        <option value="bi-cloud-slash" data-icon="bi-cloud-slash">bi-cloud-slash</option>
                                        <option value="bi-cloud-sleet-fill" data-icon="bi-cloud-sleet-fill">bi-cloud-sleet-fill</option>
                                        <option value="bi-cloud-sleet" data-icon="bi-cloud-sleet">bi-cloud-sleet</option>
                                        <option value="bi-cloud-snow-fill" data-icon="bi-cloud-snow-fill">bi-cloud-snow-fill</option>
                                        <option value="bi-cloud-snow" data-icon="bi-cloud-snow">bi-cloud-snow</option>
                                        <option value="bi-cloud-sun-fill" data-icon="bi-cloud-sun-fill">bi-cloud-sun-fill</option>
                                        <option value="bi-cloud-sun" data-icon="bi-cloud-sun">bi-cloud-sun</option>
                                        <option value="bi-cloud-upload-fill" data-icon="bi-cloud-upload-fill">bi-cloud-upload-fill</option>
                                        <option value="bi-cloud-upload" data-icon="bi-cloud-upload">bi-cloud-upload</option>
                                        <option value="bi-cloud" data-icon="bi-cloud">bi-cloud</option>
                                        <option value="bi-clouds-fill" data-icon="bi-clouds-fill">bi-clouds-fill</option>
                                        <option value="bi-clouds" data-icon="bi-clouds">bi-clouds</option>
                                        <option value="bi-cloudy-fill" data-icon="bi-cloudy-fill">bi-cloudy-fill</option>
                                        <option value="bi-cloudy" data-icon="bi-cloudy">bi-cloudy</option>
                                        <option value="bi-code-slash" data-icon="bi-code-slash">bi-code-slash</option>
                                        <option value="bi-code-square" data-icon="bi-code-square">bi-code-square</option>
                                        <option value="bi-code" data-icon="bi-code">bi-code</option>
                                        <option value="bi-collection-fill" data-icon="bi-collection-fill">bi-collection-fill</option>
                                        <option value="bi-collection-play-fill" data-icon="bi-collection-play-fill">bi-collection-play-fill</option>
                                        <option value="bi-collection-play" data-icon="bi-collection-play">bi-collection-play</option>
                                        <option value="bi-collection" data-icon="bi-collection">bi-collection</option>
                                        <option value="bi-columns-gap" data-icon="bi-columns-gap">bi-columns-gap</option>
                                        <option value="bi-columns" data-icon="bi-columns">bi-columns</option>
                                        <option value="bi-command" data-icon="bi-command">bi-command</option>
                                        <option value="bi-compass-fill" data-icon="bi-compass-fill">bi-compass-fill</option>
                                        <option value="bi-compass" data-icon="bi-compass">bi-compass</option>
                                        <option value="bi-cone-striped" data-icon="bi-cone-striped">bi-cone-striped</option>
                                        <option value="bi-cone" data-icon="bi-cone">bi-cone</option>
                                        <option value="bi-controller" data-icon="bi-controller">bi-controller</option>
                                        <option value="bi-cpu-fill" data-icon="bi-cpu-fill">bi-cpu-fill</option>
                                        <option value="bi-cpu" data-icon="bi-cpu">bi-cpu</option>
                                        <option value="bi-credit-card-2-back-fill" data-icon="bi-credit-card-2-back-fill">bi-credit-card-2-back-fill</option>
                                        <option value="bi-credit-card-2-back" data-icon="bi-credit-card-2-back">bi-credit-card-2-back</option>
                                        <option value="bi-credit-card-2-front-fill" data-icon="bi-credit-card-2-front-fill">bi-credit-card-2-front-fill</option>
                                        <option value="bi-credit-card-2-front" data-icon="bi-credit-card-2-front">bi-credit-card-2-front</option>
                                        <option value="bi-credit-card-fill" data-icon="bi-credit-card-fill">bi-credit-card-fill</option>
                                        <option value="bi-credit-card" data-icon="bi-credit-card">bi-credit-card</option>
                                        <option value="bi-crop" data-icon="bi-crop">bi-crop</option>
                                        <option value="bi-cup-fill" data-icon="bi-cup-fill">bi-cup-fill</option>
                                        <option value="bi-cup-straw" data-icon="bi-cup-straw">bi-cup-straw</option>
                                        <option value="bi-cup" data-icon="bi-cup">bi-cup</option>
                                        <option value="bi-cursor-fill" data-icon="bi-cursor-fill">bi-cursor-fill</option>
                                        <option value="bi-cursor-text" data-icon="bi-cursor-text">bi-cursor-text</option>
                                        <option value="bi-cursor" data-icon="bi-cursor">bi-cursor</option>
                                        <option value="bi-dash-circle-dotted" data-icon="bi-dash-circle-dotted">bi-dash-circle-dotted</option>
                                        <option value="bi-dash-circle-fill" data-icon="bi-dash-circle-fill">bi-dash-circle-fill</option>
                                        <option value="bi-dash-circle" data-icon="bi-dash-circle">bi-dash-circle</option>
                                        <option value="bi-dash-square-dotted" data-icon="bi-dash-square-dotted">bi-dash-square-dotted</option>
                                        <option value="bi-dash-square-fill" data-icon="bi-dash-square-fill">bi-dash-square-fill</option>
                                        <option value="bi-dash-square" data-icon="bi-dash-square">bi-dash-square</option>
                                        <option value="bi-dash" data-icon="bi-dash">bi-dash</option>
                                        <option value="bi-diagram-2-fill" data-icon="bi-diagram-2-fill">bi-diagram-2-fill</option>
                                        <option value="bi-diagram-2" data-icon="bi-diagram-2">bi-diagram-2</option>
                                        <option value="bi-diagram-3-fill" data-icon="bi-diagram-3-fill">bi-diagram-3-fill</option>
                                        <option value="bi-diagram-3" data-icon="bi-diagram-3">bi-diagram-3</option>
                                        <option value="bi-diamond-fill" data-icon="bi-diamond-fill">bi-diamond-fill</option>
                                        <option value="bi-diamond-half" data-icon="bi-diamond-half">bi-diamond-half</option>
                                        <option value="bi-diamond" data-icon="bi-diamond">bi-diamond</option>
                                        <option value="bi-dice-1-fill" data-icon="bi-dice-1-fill">bi-dice-1-fill</option>
                                        <option value="bi-dice-1" data-icon="bi-dice-1">bi-dice-1</option>
                                        <option value="bi-dice-2-fill" data-icon="bi-dice-2-fill">bi-dice-2-fill</option>
                                        <option value="bi-dice-2" data-icon="bi-dice-2">bi-dice-2</option>
                                        <option value="bi-dice-3-fill" data-icon="bi-dice-3-fill">bi-dice-3-fill</option>
                                        <option value="bi-dice-3" data-icon="bi-dice-3">bi-dice-3</option>
                                        <option value="bi-dice-4-fill" data-icon="bi-dice-4-fill">bi-dice-4-fill</option>
                                        <option value="bi-dice-4" data-icon="bi-dice-4">bi-dice-4</option>
                                        <option value="bi-dice-5-fill" data-icon="bi-dice-5-fill">bi-dice-5-fill</option>
                                        <option value="bi-dice-5" data-icon="bi-dice-5">bi-dice-5</option>
                                        <option value="bi-dice-6-fill" data-icon="bi-dice-6-fill">bi-dice-6-fill</option>
                                        <option value="bi-dice-6" data-icon="bi-dice-6">bi-dice-6</option>
                                        <option value="bi-disc-fill" data-icon="bi-disc-fill">bi-disc-fill</option>
                                        <option value="bi-disc" data-icon="bi-disc">bi-disc</option>
                                        <option value="bi-discord" data-icon="bi-discord">bi-discord</option>
                                        <option value="bi-display-fill" data-icon="bi-display-fill">bi-display-fill</option>
                                        <option value="bi-display" data-icon="bi-display">bi-display</option>
                                        <option value="bi-distribute-horizontal" data-icon="bi-distribute-horizontal">bi-distribute-horizontal</option>
                                        <option value="bi-distribute-vertical" data-icon="bi-distribute-vertical">bi-distribute-vertical</option>
                                        <option value="bi-door-closed-fill" data-icon="bi-door-closed-fill">bi-door-closed-fill</option>
                                        <option value="bi-door-closed" data-icon="bi-door-closed">bi-door-closed</option>
                                        <option value="bi-door-open-fill" data-icon="bi-door-open-fill">bi-door-open-fill</option>
                                        <option value="bi-door-open" data-icon="bi-door-open">bi-door-open</option>
                                        <option value="bi-dot" data-icon="bi-dot">bi-dot</option>
                                        <option value="bi-download" data-icon="bi-download">bi-download</option>
                                        <option value="bi-droplet-fill" data-icon="bi-droplet-fill">bi-droplet-fill</option>
                                        <option value="bi-droplet-half" data-icon="bi-droplet-half">bi-droplet-half</option>
                                        <option value="bi-droplet" data-icon="bi-droplet">bi-droplet</option>
                                        <option value="bi-earbuds" data-icon="bi-earbuds">bi-earbuds</option>
                                        <option value="bi-easel-fill" data-icon="bi-easel-fill">bi-easel-fill</option>
                                        <option value="bi-easel" data-icon="bi-easel">bi-easel</option>
                                        <option value="bi-egg-fill" data-icon="bi-egg-fill">bi-egg-fill</option>
                                        <option value="bi-egg-fried" data-icon="bi-egg-fried">bi-egg-fried</option>
                                        <option value="bi-egg" data-icon="bi-egg">bi-egg</option>
                                        <option value="bi-eject-fill" data-icon="bi-eject-fill">bi-eject-fill</option>
                                        <option value="bi-eject" data-icon="bi-eject">bi-eject</option>
                                        <option value="bi-emoji-angry-fill" data-icon="bi-emoji-angry-fill">bi-emoji-angry-fill</option>
                                        <option value="bi-emoji-angry" data-icon="bi-emoji-angry">bi-emoji-angry</option>
                                        <option value="bi-emoji-dizzy-fill" data-icon="bi-emoji-dizzy-fill">bi-emoji-dizzy-fill</option>
                                        <option value="bi-emoji-dizzy" data-icon="bi-emoji-dizzy">bi-emoji-dizzy</option>
                                        <option value="bi-emoji-expressionless-fill" data-icon="bi-emoji-expressionless-fill">bi-emoji-expressionless-fill</option>
                                        <option value="bi-emoji-expressionless" data-icon="bi-emoji-expressionless">bi-emoji-expressionless</option>
                                        <option value="bi-emoji-frown-fill" data-icon="bi-emoji-frown-fill">bi-emoji-frown-fill</option>
                                        <option value="bi-emoji-frown" data-icon="bi-emoji-frown">bi-emoji-frown</option>
                                        <option value="bi-emoji-heart-eyes-fill" data-icon="bi-emoji-heart-eyes-fill">bi-emoji-heart-eyes-fill</option>
                                        <option value="bi-emoji-heart-eyes" data-icon="bi-emoji-heart-eyes">bi-emoji-heart-eyes</option>
                                        <option value="bi-emoji-laughing-fill" data-icon="bi-emoji-laughing-fill">bi-emoji-laughing-fill</option>
                                        <option value="bi-emoji-laughing" data-icon="bi-emoji-laughing">bi-emoji-laughing</option>
                                        <option value="bi-emoji-neutral-fill" data-icon="bi-emoji-neutral-fill">bi-emoji-neutral-fill</option>
                                        <option value="bi-emoji-neutral" data-icon="bi-emoji-neutral">bi-emoji-neutral</option>
                                        <option value="bi-emoji-smile-fill" data-icon="bi-emoji-smile-fill">bi-emoji-smile-fill</option>
                                        <option value="bi-emoji-smile-upside-down-fill" data-icon="bi-emoji-smile-upside-down-fill">bi-emoji-smile-upside-down-fill</option>
                                        <option value="bi-emoji-smile-upside-down" data-icon="bi-emoji-smile-upside-down">bi-emoji-smile-upside-down</option>
                                        <option value="bi-emoji-smile" data-icon="bi-emoji-smile">bi-emoji-smile</option>
                                        <option value="bi-emoji-sunglasses-fill" data-icon="bi-emoji-sunglasses-fill">bi-emoji-sunglasses-fill</option>
                                        <option value="bi-emoji-sunglasses" data-icon="bi-emoji-sunglasses">bi-emoji-sunglasses</option>
                                        <option value="bi-emoji-wink-fill" data-icon="bi-emoji-wink-fill">bi-emoji-wink-fill</option>
                                        <option value="bi-emoji-wink" data-icon="bi-emoji-wink">bi-emoji-wink</option>
                                        <option value="bi-envelope-fill" data-icon="bi-envelope-fill">bi-envelope-fill</option>
                                        <option value="bi-envelope-open-fill" data-icon="bi-envelope-open-fill">bi-envelope-open-fill</option>
                                        <option value="bi-envelope-open" data-icon="bi-envelope-open">bi-envelope-open</option>
                                        <option value="bi-envelope" data-icon="bi-envelope">bi-envelope</option>
                                        <option value="bi-eraser-fill" data-icon="bi-eraser-fill">bi-eraser-fill</option>
                                        <option value="bi-eraser" data-icon="bi-eraser">bi-eraser</option>
                                        <option value="bi-exclamation-circle-fill" data-icon="bi-exclamation-circle-fill">bi-exclamation-circle-fill</option>
                                        <option value="bi-exclamation-circle" data-icon="bi-exclamation-circle">bi-exclamation-circle</option>
                                        <option value="bi-exclamation-diamond-fill" data-icon="bi-exclamation-diamond-fill">bi-exclamation-diamond-fill</option>
                                        <option value="bi-exclamation-diamond" data-icon="bi-exclamation-diamond">bi-exclamation-diamond</option>
                                        <option value="bi-exclamation-octagon-fill" data-icon="bi-exclamation-octagon-fill">bi-exclamation-octagon-fill</option>
                                        <option value="bi-exclamation-octagon" data-icon="bi-exclamation-octagon">bi-exclamation-octagon</option>
                                        <option value="bi-exclamation-square-fill" data-icon="bi-exclamation-square-fill">bi-exclamation-square-fill</option>
                                        <option value="bi-exclamation-square" data-icon="bi-exclamation-square">bi-exclamation-square</option>
                                        <option value="bi-exclamation-triangle-fill" data-icon="bi-exclamation-triangle-fill">bi-exclamation-triangle-fill</option>
                                        <option value="bi-exclamation-triangle" data-icon="bi-exclamation-triangle">bi-exclamation-triangle</option>
                                        <option value="bi-exclamation" data-icon="bi-exclamation">bi-exclamation</option>
                                        <option value="bi-exclude" data-icon="bi-exclude">bi-exclude</option>
                                        <option value="bi-eye-fill" data-icon="bi-eye-fill">bi-eye-fill</option>
                                        <option value="bi-eye-slash-fill" data-icon="bi-eye-slash-fill">bi-eye-slash-fill</option>
                                        <option value="bi-eye-slash" data-icon="bi-eye-slash">bi-eye-slash</option>
                                        <option value="bi-eye" data-icon="bi-eye">bi-eye</option>
                                        <option value="bi-eyedropper" data-icon="bi-eyedropper">bi-eyedropper</option>
                                        <option value="bi-eyeglasses" data-icon="bi-eyeglasses">bi-eyeglasses</option>
                                        <option value="bi-facebook" data-icon="bi-facebook">bi-facebook</option>
                                        <option value="bi-file-arrow-down-fill" data-icon="bi-file-arrow-down-fill">bi-file-arrow-down-fill</option>
                                        <option value="bi-file-arrow-down" data-icon="bi-file-arrow-down">bi-file-arrow-down</option>
                                        <option value="bi-file-arrow-up-fill" data-icon="bi-file-arrow-up-fill">bi-file-arrow-up-fill</option>
                                        <option value="bi-file-arrow-up" data-icon="bi-file-arrow-up">bi-file-arrow-up</option>
                                        <option value="bi-file-bar-graph-fill" data-icon="bi-file-bar-graph-fill">bi-file-bar-graph-fill</option>
                                        <option value="bi-file-bar-graph" data-icon="bi-file-bar-graph">bi-file-bar-graph</option>
                                        <option value="bi-file-binary-fill" data-icon="bi-file-binary-fill">bi-file-binary-fill</option>
                                        <option value="bi-file-binary" data-icon="bi-file-binary">bi-file-binary</option>
                                        <option value="bi-file-break-fill" data-icon="bi-file-break-fill">bi-file-break-fill</option>
                                        <option value="bi-file-break" data-icon="bi-file-break">bi-file-break</option>
                                        <option value="bi-file-check-fill" data-icon="bi-file-check-fill">bi-file-check-fill</option>
                                        <option value="bi-file-check" data-icon="bi-file-check">bi-file-check</option>
                                        <option value="bi-file-code-fill" data-icon="bi-file-code-fill">bi-file-code-fill</option>
                                        <option value="bi-file-code" data-icon="bi-file-code">bi-file-code</option>
                                        <option value="bi-file-diff-fill" data-icon="bi-file-diff-fill">bi-file-diff-fill</option>
                                        <option value="bi-file-diff" data-icon="bi-file-diff">bi-file-diff</option>
                                        <option value="bi-file-earmark-arrow-down-fill" data-icon="bi-file-earmark-arrow-down-fill">bi-file-earmark-arrow-down-fill</option>
                                        <option value="bi-file-earmark-arrow-down" data-icon="bi-file-earmark-arrow-down">bi-file-earmark-arrow-down</option>
                                        <option value="bi-file-earmark-arrow-up-fill" data-icon="bi-file-earmark-arrow-up-fill">bi-file-earmark-arrow-up-fill</option>
                                        <option value="bi-file-earmark-arrow-up" data-icon="bi-file-earmark-arrow-up">bi-file-earmark-arrow-up</option>
                                        <option value="bi-file-earmark-bar-graph-fill" data-icon="bi-file-earmark-bar-graph-fill">bi-file-earmark-bar-graph-fill</option>
                                        <option value="bi-file-earmark-bar-graph" data-icon="bi-file-earmark-bar-graph">bi-file-earmark-bar-graph</option>
                                        <option value="bi-file-earmark-binary-fill" data-icon="bi-file-earmark-binary-fill">bi-file-earmark-binary-fill</option>
                                        <option value="bi-file-earmark-binary" data-icon="bi-file-earmark-binary">bi-file-earmark-binary</option>
                                        <option value="bi-file-earmark-break-fill" data-icon="bi-file-earmark-break-fill">bi-file-earmark-break-fill</option>
                                        <option value="bi-file-earmark-break" data-icon="bi-file-earmark-break">bi-file-earmark-break</option>
                                        <option value="bi-file-earmark-check-fill" data-icon="bi-file-earmark-check-fill">bi-file-earmark-check-fill</option>
                                        <option value="bi-file-earmark-check" data-icon="bi-file-earmark-check">bi-file-earmark-check</option>
                                        <option value="bi-file-earmark-code-fill" data-icon="bi-file-earmark-code-fill">bi-file-earmark-code-fill</option>
                                        <option value="bi-file-earmark-code" data-icon="bi-file-earmark-code">bi-file-earmark-code</option>
                                        <option value="bi-file-earmark-diff-fill" data-icon="bi-file-earmark-diff-fill">bi-file-earmark-diff-fill</option>
                                        <option value="bi-file-earmark-diff" data-icon="bi-file-earmark-diff">bi-file-earmark-diff</option>
                                        <option value="bi-file-earmark-easel-fill" data-icon="bi-file-earmark-easel-fill">bi-file-earmark-easel-fill</option>
                                        <option value="bi-file-earmark-easel" data-icon="bi-file-earmark-easel">bi-file-earmark-easel</option>
                                        <option value="bi-file-earmark-excel-fill" data-icon="bi-file-earmark-excel-fill">bi-file-earmark-excel-fill</option>
                                        <option value="bi-file-earmark-excel" data-icon="bi-file-earmark-excel">bi-file-earmark-excel</option>
                                        <option value="bi-file-earmark-fill" data-icon="bi-file-earmark-fill">bi-file-earmark-fill</option>
                                        <option value="bi-file-earmark-font-fill" data-icon="bi-file-earmark-font-fill">bi-file-earmark-font-fill</option>
                                        <option value="bi-file-earmark-font" data-icon="bi-file-earmark-font">bi-file-earmark-font</option>
                                        <option value="bi-file-earmark-image-fill" data-icon="bi-file-earmark-image-fill">bi-file-earmark-image-fill</option>
                                        <option value="bi-file-earmark-image" data-icon="bi-file-earmark-image">bi-file-earmark-image</option>
                                        <option value="bi-file-earmark-lock-fill" data-icon="bi-file-earmark-lock-fill">bi-file-earmark-lock-fill</option>
                                        <option value="bi-file-earmark-lock" data-icon="bi-file-earmark-lock">bi-file-earmark-lock</option>
                                        <option value="bi-file-earmark-lock2-fill" data-icon="bi-file-earmark-lock2-fill">bi-file-earmark-lock2-fill</option>
                                        <option value="bi-file-earmark-lock2" data-icon="bi-file-earmark-lock2">bi-file-earmark-lock2</option>
                                        <option value="bi-file-earmark-medical-fill" data-icon="bi-file-earmark-medical-fill">bi-file-earmark-medical-fill</option>
                                        <option value="bi-file-earmark-medical" data-icon="bi-file-earmark-medical">bi-file-earmark-medical</option>
                                        <option value="bi-file-earmark-minus-fill" data-icon="bi-file-earmark-minus-fill">bi-file-earmark-minus-fill</option>
                                        <option value="bi-file-earmark-minus" data-icon="bi-file-earmark-minus">bi-file-earmark-minus</option>
                                        <option value="bi-file-earmark-music-fill" data-icon="bi-file-earmark-music-fill">bi-file-earmark-music-fill</option>
                                        <option value="bi-file-earmark-music" data-icon="bi-file-earmark-music">bi-file-earmark-music</option>
                                        <option value="bi-file-earmark-person-fill" data-icon="bi-file-earmark-person-fill">bi-file-earmark-person-fill</option>
                                        <option value="bi-file-earmark-person" data-icon="bi-file-earmark-person">bi-file-earmark-person</option>
                                        <option value="bi-file-earmark-play-fill" data-icon="bi-file-earmark-play-fill">bi-file-earmark-play-fill</option>
                                        <option value="bi-file-earmark-play" data-icon="bi-file-earmark-play">bi-file-earmark-play</option>
                                        <option value="bi-file-earmark-plus-fill" data-icon="bi-file-earmark-plus-fill">bi-file-earmark-plus-fill</option>
                                        <option value="bi-file-earmark-plus" data-icon="bi-file-earmark-plus">bi-file-earmark-plus</option>
                                        <option value="bi-file-earmark-post-fill" data-icon="bi-file-earmark-post-fill">bi-file-earmark-post-fill</option>
                                        <option value="bi-file-earmark-post" data-icon="bi-file-earmark-post">bi-file-earmark-post</option>
                                        <option value="bi-file-earmark-ppt-fill" data-icon="bi-file-earmark-ppt-fill">bi-file-earmark-ppt-fill</option>
                                        <option value="bi-file-earmark-ppt" data-icon="bi-file-earmark-ppt">bi-file-earmark-ppt</option>
                                        <option value="bi-file-earmark-richtext-fill" data-icon="bi-file-earmark-richtext-fill">bi-file-earmark-richtext-fill</option>
                                        <option value="bi-file-earmark-richtext" data-icon="bi-file-earmark-richtext">bi-file-earmark-richtext</option>
                                        <option value="bi-file-earmark-ruled-fill" data-icon="bi-file-earmark-ruled-fill">bi-file-earmark-ruled-fill</option>
                                        <option value="bi-file-earmark-ruled" data-icon="bi-file-earmark-ruled">bi-file-earmark-ruled</option>
                                        <option value="bi-file-earmark-slides-fill" data-icon="bi-file-earmark-slides-fill">bi-file-earmark-slides-fill</option>
                                        <option value="bi-file-earmark-slides" data-icon="bi-file-earmark-slides">bi-file-earmark-slides</option>
                                        <option value="bi-file-earmark-spreadsheet-fill" data-icon="bi-file-earmark-spreadsheet-fill">bi-file-earmark-spreadsheet-filoption>li>
                                        <option value="bi-file-earmark-spreadsheet" data-icon="bi-file-earmark-spreadsheet">bi-file-earmark-spreadsheet</option>
                                        <option value="bi-file-earmark-text-fill" data-icon="bi-file-earmark-text-fill">bi-file-earmark-text-fill</option>
                                        <option value="bi-file-earmark-text" data-icon="bi-file-earmark-text">bi-file-earmark-text</option>
                                        <option value="bi-file-earmark-word-fill" data-icon="bi-file-earmark-word-fill">bi-file-earmark-word-fill</option>
                                        <option value="bi-file-earmark-word" data-icon="bi-file-earmark-word">bi-file-earmark-word</option>
                                        <option value="bi-file-earmark-x-fill" data-icon="bi-file-earmark-x-fill">bi-file-earmark-x-fill</option>
                                        <option value="bi-file-earmark-x" data-icon="bi-file-earmark-x">bi-file-earmark-x</option>
                                        <option value="bi-file-earmark-zip-fill" data-icon="bi-file-earmark-zip-fill">bi-file-earmark-zip-fill</option>
                                        <option value="bi-file-earmark-zip" data-icon="bi-file-earmark-zip">bi-file-earmark-zip</option>
                                        <option value="bi-file-earmark" data-icon="bi-file-earmark">bi-file-earmark</option>
                                        <option value="bi-file-easel-fill" data-icon="bi-file-easel-fill">bi-file-easel-fill</option>
                                        <option value="bi-file-easel" data-icon="bi-file-easel">bi-file-easel</option>
                                        <option value="bi-file-excel-fill" data-icon="bi-file-excel-fill">bi-file-excel-fill</option>
                                        <option value="bi-file-excel" data-icon="bi-file-excel">bi-file-excel</option>
                                        <option value="bi-file-fill" data-icon="bi-file-fill">bi-file-fill</option>
                                        <option value="bi-file-font-fill" data-icon="bi-file-font-fill">bi-file-font-fill</option>
                                        <option value="bi-file-font" data-icon="bi-file-font">bi-file-font</option>
                                        <option value="bi-file-image-fill" data-icon="bi-file-image-fill">bi-file-image-fill</option>
                                        <option value="bi-file-image" data-icon="bi-file-image">bi-file-image</option>
                                        <option value="bi-file-lock-fill" data-icon="bi-file-lock-fill">bi-file-lock-fill</option>
                                        <option value="bi-file-lock" data-icon="bi-file-lock">bi-file-lock</option>
                                        <option value="bi-file-lock2-fill" data-icon="bi-file-lock2-fill">bi-file-lock2-fill</option>
                                        <option value="bi-file-lock2" data-icon="bi-file-lock2">bi-file-lock2</option>
                                        <option value="bi-file-medical-fill" data-icon="bi-file-medical-fill">bi-file-medical-fill</option>
                                        <option value="bi-file-medical" data-icon="bi-file-medical">bi-file-medical</option>
                                        <option value="bi-file-minus-fill" data-icon="bi-file-minus-fill">bi-file-minus-fill</option>
                                        <option value="bi-file-minus" data-icon="bi-file-minus">bi-file-minus</option>
                                        <option value="bi-file-music-fill" data-icon="bi-file-music-fill">bi-file-music-fill</option>
                                        <option value="bi-file-music" data-icon="bi-file-music">bi-file-music</option>
                                        <option value="bi-file-person-fill" data-icon="bi-file-person-fill">bi-file-person-fill</option>
                                        <option value="bi-file-person" data-icon="bi-file-person">bi-file-person</option>
                                        <option value="bi-file-play-fill" data-icon="bi-file-play-fill">bi-file-play-fill</option>
                                        <option value="bi-file-play" data-icon="bi-file-play">bi-file-play</option>
                                        <option value="bi-file-plus-fill" data-icon="bi-file-plus-fill">bi-file-plus-fill</option>
                                        <option value="bi-file-plus" data-icon="bi-file-plus">bi-file-plus</option>
                                        <option value="bi-file-post-fill" data-icon="bi-file-post-fill">bi-file-post-fill</option>
                                        <option value="bi-file-post" data-icon="bi-file-post">bi-file-post</option>
                                        <option value="bi-file-ppt-fill" data-icon="bi-file-ppt-fill">bi-file-ppt-fill</option>
                                        <option value="bi-file-ppt" data-icon="bi-file-ppt">bi-file-ppt</option>
                                        <option value="bi-file-richtext-fill" data-icon="bi-file-richtext-fill">bi-file-richtext-fill</option>
                                        <option value="bi-file-richtext" data-icon="bi-file-richtext">bi-file-richtext</option>
                                        <option value="bi-file-ruled-fill" data-icon="bi-file-ruled-fill">bi-file-ruled-fill</option>
                                        <option value="bi-file-ruled" data-icon="bi-file-ruled">bi-file-ruled</option>
                                        <option value="bi-file-slides-fill" data-icon="bi-file-slides-fill">bi-file-slides-fill</option>
                                        <option value="bi-file-slides" data-icon="bi-file-slides">bi-file-slides</option>
                                        <option value="bi-file-spreadsheet-fill" data-icon="bi-file-spreadsheet-fill">bi-file-spreadsheet-fill</option>
                                        <option value="bi-file-spreadsheet" data-icon="bi-file-spreadsheet">bi-file-spreadsheet</option>
                                        <option value="bi-file-text-fill" data-icon="bi-file-text-fill">bi-file-text-fill</option>
                                        <option value="bi-file-text" data-icon="bi-file-text">bi-file-text</option>
                                        <option value="bi-file-word-fill" data-icon="bi-file-word-fill">bi-file-word-fill</option>
                                        <option value="bi-file-word" data-icon="bi-file-word">bi-file-word</option>
                                        <option value="bi-file-x-fill" data-icon="bi-file-x-fill">bi-file-x-fill</option>
                                        <option value="bi-file-x" data-icon="bi-file-x">bi-file-x</option>
                                        <option value="bi-file-zip-fill" data-icon="bi-file-zip-fill">bi-file-zip-fill</option>
                                        <option value="bi-file-zip" data-icon="bi-file-zip">bi-file-zip</option>
                                        <option value="bi-file" data-icon="bi-file">bi-file</option>
                                        <option value="bi-files-alt" data-icon="bi-files-alt">bi-files-alt</option>
                                        <option value="bi-files" data-icon="bi-files">bi-files</option>
                                        <option value="bi-film" data-icon="bi-film">bi-film</option>
                                        <option value="bi-filter-circle-fill" data-icon="bi-filter-circle-fill">bi-filter-circle-fill</option>
                                        <option value="bi-filter-circle" data-icon="bi-filter-circle">bi-filter-circle</option>
                                        <option value="bi-filter-left" data-icon="bi-filter-left">bi-filter-left</option>
                                        <option value="bi-filter-right" data-icon="bi-filter-right">bi-filter-right</option>
                                        <option value="bi-filter-square-fill" data-icon="bi-filter-square-fill">bi-filter-square-fill</option>
                                        <option value="bi-filter-square" data-icon="bi-filter-square">bi-filter-square</option>
                                        <option value="bi-filter" data-icon="bi-filter">bi-filter</option>
                                        <option value="bi-flag-fill" data-icon="bi-flag-fill">bi-flag-fill</option>
                                        <option value="bi-flag" data-icon="bi-flag">bi-flag</option>
                                        <option value="bi-flower1" data-icon="bi-flower1">bi-flower1</option>
                                        <option value="bi-flower2" data-icon="bi-flower2">bi-flower2</option>
                                        <option value="bi-flower3" data-icon="bi-flower3">bi-flower3</option>
                                        <option value="bi-folder-check" data-icon="bi-folder-check">bi-folder-check</option>
                                        <option value="bi-folder-fill" data-icon="bi-folder-fill">bi-folder-fill</option>
                                        <option value="bi-folder-minus" data-icon="bi-folder-minus">bi-folder-minus</option>
                                        <option value="bi-folder-plus" data-icon="bi-folder-plus">bi-folder-plus</option>
                                        <option value="bi-folder-symlink-fill" data-icon="bi-folder-symlink-fill">bi-folder-symlink-fill</option>
                                        <option value="bi-folder-symlink" data-icon="bi-folder-symlink">bi-folder-symlink</option>
                                        <option value="bi-folder-x" data-icon="bi-folder-x">bi-folder-x</option>
                                        <option value="bi-folder" data-icon="bi-folder">bi-folder</option>
                                        <option value="bi-folder2-open" data-icon="bi-folder2-open">bi-folder2-open</option>
                                        <option value="bi-folder2" data-icon="bi-folder2">bi-folder2</option>
                                        <option value="bi-fonts" data-icon="bi-fonts">bi-fonts</option>
                                        <option value="bi-forward-fill" data-icon="bi-forward-fill">bi-forward-fill</option>
                                        <option value="bi-forward" data-icon="bi-forward">bi-forward</option>
                                        <option value="bi-front" data-icon="bi-front">bi-front</option>
                                        <option value="bi-fullscreen-exit" data-icon="bi-fullscreen-exit">bi-fullscreen-exit</option>
                                        <option value="bi-fullscreen" data-icon="bi-fullscreen">bi-fullscreen</option>
                                        <option value="bi-funnel-fill" data-icon="bi-funnel-fill">bi-funnel-fill</option>
                                        <option value="bi-funnel" data-icon="bi-funnel">bi-funnel</option>
                                        <option value="bi-gear-fill" data-icon="bi-gear-fill">bi-gear-fill</option>
                                        <option value="bi-gear-wide-connected" data-icon="bi-gear-wide-connected">bi-gear-wide-connected</option>
                                        <option value="bi-gear-wide" data-icon="bi-gear-wide">bi-gear-wide</option>
                                        <option value="bi-gear" data-icon="bi-gear">bi-gear</option>
                                        <option value="bi-gem" data-icon="bi-gem">bi-gem</option>
                                        <option value="bi-geo-alt-fill" data-icon="bi-geo-alt-fill">bi-geo-alt-fill</option>
                                        <option value="bi-geo-alt" data-icon="bi-geo-alt">bi-geo-alt</option>
                                        <option value="bi-geo-fill" data-icon="bi-geo-fill">bi-geo-fill</option>
                                        <option value="bi-geo" data-icon="bi-geo">bi-geo</option>
                                        <option value="bi-gift-fill" data-icon="bi-gift-fill">bi-gift-fill</option>
                                        <option value="bi-gift" data-icon="bi-gift">bi-gift</option>
                                        <option value="bi-github" data-icon="bi-github">bi-github</option>
                                        <option value="bi-globe" data-icon="bi-globe">bi-globe</option>
                                        <option value="bi-globe2" data-icon="bi-globe2">bi-globe2</option>
                                        <option value="bi-google" data-icon="bi-google">bi-google</option>
                                        <option value="bi-graph-down" data-icon="bi-graph-down">bi-graph-down</option>
                                        <option value="bi-graph-up" data-icon="bi-graph-up">bi-graph-up</option>
                                        <option value="bi-grid-1x2-fill" data-icon="bi-grid-1x2-fill">bi-grid-1x2-fill</option>
                                        <option value="bi-grid-1x2" data-icon="bi-grid-1x2">bi-grid-1x2</option>
                                        <option value="bi-grid-3x2-gap-fill" data-icon="bi-grid-3x2-gap-fill">bi-grid-3x2-gap-fill</option>
                                        <option value="bi-grid-3x2-gap" data-icon="bi-grid-3x2-gap">bi-grid-3x2-gap</option>
                                        <option value="bi-grid-3x2" data-icon="bi-grid-3x2">bi-grid-3x2</option>
                                        <option value="bi-grid-3x3-gap-fill" data-icon="bi-grid-3x3-gap-fill">bi-grid-3x3-gap-fill</option>
                                        <option value="bi-grid-3x3-gap" data-icon="bi-grid-3x3-gap">bi-grid-3x3-gap</option>
                                        <option value="bi-grid-3x3" data-icon="bi-grid-3x3">bi-grid-3x3</option>
                                        <option value="bi-grid-fill" data-icon="bi-grid-fill">bi-grid-fill</option>
                                        <option value="bi-grid" data-icon="bi-grid">bi-grid</option>
                                        <option value="bi-grip-horizontal" data-icon="bi-grip-horizontal">bi-grip-horizontal</option>
                                        <option value="bi-grip-vertical" data-icon="bi-grip-vertical">bi-grip-vertical</option>
                                        <option value="bi-hammer" data-icon="bi-hammer">bi-hammer</option>
                                        <option value="bi-hand-index-fill" data-icon="bi-hand-index-fill">bi-hand-index-fill</option>
                                        <option value="bi-hand-index-thumb-fill" data-icon="bi-hand-index-thumb-fill">bi-hand-index-thumb-fill</option>
                                        <option value="bi-hand-index-thumb" data-icon="bi-hand-index-thumb">bi-hand-index-thumb</option>
                                        <option value="bi-hand-index" data-icon="bi-hand-index">bi-hand-index</option>
                                        <option value="bi-hand-thumbs-down-fill" data-icon="bi-hand-thumbs-down-fill">bi-hand-thumbs-down-fill</option>
                                        <option value="bi-hand-thumbs-down" data-icon="bi-hand-thumbs-down">bi-hand-thumbs-down</option>
                                        <option value="bi-hand-thumbs-up-fill" data-icon="bi-hand-thumbs-up-fill">bi-hand-thumbs-up-fill</option>
                                        <option value="bi-hand-thumbs-up" data-icon="bi-hand-thumbs-up">bi-hand-thumbs-up</option>
                                        <option value="bi-handbag-fill" data-icon="bi-handbag-fill">bi-handbag-fill</option>
                                        <option value="bi-handbag" data-icon="bi-handbag">bi-handbag</option>
                                        <option value="bi-hash" data-icon="bi-hash">bi-hash</option>
                                        <option value="bi-hdd-fill" data-icon="bi-hdd-fill">bi-hdd-fill</option>
                                        <option value="bi-hdd-network-fill" data-icon="bi-hdd-network-fill">bi-hdd-network-fill</option>
                                        <option value="bi-hdd-network" data-icon="bi-hdd-network">bi-hdd-network</option>
                                        <option value="bi-hdd-rack-fill" data-icon="bi-hdd-rack-fill">bi-hdd-rack-fill</option>
                                        <option value="bi-hdd-rack" data-icon="bi-hdd-rack">bi-hdd-rack</option>
                                        <option value="bi-hdd-stack-fill" data-icon="bi-hdd-stack-fill">bi-hdd-stack-fill</option>
                                        <option value="bi-hdd-stack" data-icon="bi-hdd-stack">bi-hdd-stack</option>
                                        <option value="bi-hdd" data-icon="bi-hdd">bi-hdd</option>
                                        <option value="bi-headphones" data-icon="bi-headphones">bi-headphones</option>
                                        <option value="bi-headset" data-icon="bi-headset">bi-headset</option>
                                        <option value="bi-heart-fill" data-icon="bi-heart-fill">bi-heart-fill</option>
                                        <option value="bi-heart-half" data-icon="bi-heart-half">bi-heart-half</option>
                                        <option value="bi-heart" data-icon="bi-heart">bi-heart</option>
                                        <option value="bi-heptagon-fill" data-icon="bi-heptagon-fill">bi-heptagon-fill</option>
                                        <option value="bi-heptagon-half" data-icon="bi-heptagon-half">bi-heptagon-half</option>
                                        <option value="bi-heptagon" data-icon="bi-heptagon">bi-heptagon</option>
                                        <option value="bi-hexagon-fill" data-icon="bi-hexagon-fill">bi-hexagon-fill</option>
                                        <option value="bi-hexagon-half" data-icon="bi-hexagon-half">bi-hexagon-half</option>
                                        <option value="bi-hexagon" data-icon="bi-hexagon">bi-hexagon</option>
                                        <option value="bi-hourglass-bottom" data-icon="bi-hourglass-bottom">bi-hourglass-bottom</option>
                                        <option value="bi-hourglass-split" data-icon="bi-hourglass-split">bi-hourglass-split</option>
                                        <option value="bi-hourglass-top" data-icon="bi-hourglass-top">bi-hourglass-top</option>
                                        <option value="bi-hourglass" data-icon="bi-hourglass">bi-hourglass</option>
                                        <option value="bi-house-door-fill" data-icon="bi-house-door-fill">bi-house-door-fill</option>
                                        <option value="bi-house-door" data-icon="bi-house-door">bi-house-door</option>
                                        <option value="bi-house-fill" data-icon="bi-house-fill">bi-house-fill</option>
                                        <option value="bi-house" data-icon="bi-house">bi-house</option>
                                        <option value="bi-hr" data-icon="bi-hr">bi-hr</option>
                                        <option value="bi-hurricane" data-icon="bi-hurricane">bi-hurricane</option>
                                        <option value="bi-image-alt" data-icon="bi-image-alt">bi-image-alt</option>
                                        <option value="bi-image-fill" data-icon="bi-image-fill">bi-image-fill</option>
                                        <option value="bi-image" data-icon="bi-image">bi-image</option>
                                        <option value="bi-images" data-icon="bi-images">bi-images</option>
                                        <option value="bi-inbox-fill" data-icon="bi-inbox-fill">bi-inbox-fill</option>
                                        <option value="bi-inbox" data-icon="bi-inbox">bi-inbox</option>
                                        <option value="bi-inboxes-fill" data-icon="bi-inboxes-fill">bi-inboxes-fill</option>
                                        <option value="bi-inboxes" data-icon="bi-inboxes">bi-inboxes</option>
                                        <option value="bi-info-circle-fill" data-icon="bi-info-circle-fill">bi-info-circle-fill</option>
                                        <option value="bi-info-circle" data-icon="bi-info-circle">bi-info-circle</option>
                                        <option value="bi-info-square-fill" data-icon="bi-info-square-fill">bi-info-square-fill</option>
                                        <option value="bi-info-square" data-icon="bi-info-square">bi-info-square</option>
                                        <option value="bi-info" data-icon="bi-info">bi-info</option>
                                        <option value="bi-input-cursor-text" data-icon="bi-input-cursor-text">bi-input-cursor-text</option>
                                        <option value="bi-input-cursor" data-icon="bi-input-cursor">bi-input-cursor</option>
                                        <option value="bi-instagram" data-icon="bi-instagram">bi-instagram</option>
                                        <option value="bi-intersect" data-icon="bi-intersect">bi-intersect</option>
                                        <option value="bi-journal-album" data-icon="bi-journal-album">bi-journal-album</option>
                                        <option value="bi-journal-arrow-down" data-icon="bi-journal-arrow-down">bi-journal-arrow-down</option>
                                        <option value="bi-journal-arrow-up" data-icon="bi-journal-arrow-up">bi-journal-arrow-up</option>
                                        <option value="bi-journal-bookmark-fill" data-icon="bi-journal-bookmark-fill">bi-journal-bookmark-fill</option>
                                        <option value="bi-journal-bookmark" data-icon="bi-journal-bookmark">bi-journal-bookmark</option>
                                        <option value="bi-journal-check" data-icon="bi-journal-check">bi-journal-check</option>
                                        <option value="bi-journal-code" data-icon="bi-journal-code">bi-journal-code</option>
                                        <option value="bi-journal-medical" data-icon="bi-journal-medical">bi-journal-medical</option>
                                        <option value="bi-journal-minus" data-icon="bi-journal-minus">bi-journal-minus</option>
                                        <option value="bi-journal-plus" data-icon="bi-journal-plus">bi-journal-plus</option>
                                        <option value="bi-journal-richtext" data-icon="bi-journal-richtext">bi-journal-richtext</option>
                                        <option value="bi-journal-text" data-icon="bi-journal-text">bi-journal-text</option>
                                        <option value="bi-journal-x" data-icon="bi-journal-x">bi-journal-x</option>
                                        <option value="bi-journal" data-icon="bi-journal">bi-journal</option>
                                        <option value="bi-journals" data-icon="bi-journals">bi-journals</option>
                                        <option value="bi-joystick" data-icon="bi-joystick">bi-joystick</option>
                                        <option value="bi-justify-left" data-icon="bi-justify-left">bi-justify-left</option>
                                        <option value="bi-justify-right" data-icon="bi-justify-right">bi-justify-right</option>
                                        <option value="bi-justify" data-icon="bi-justify">bi-justify</option>
                                        <option value="bi-kanban-fill" data-icon="bi-kanban-fill">bi-kanban-fill</option>
                                        <option value="bi-kanban" data-icon="bi-kanban">bi-kanban</option>
                                        <option value="bi-key-fill" data-icon="bi-key-fill">bi-key-fill</option>
                                        <option value="bi-key" data-icon="bi-key">bi-key</option>
                                        <option value="bi-keyboard-fill" data-icon="bi-keyboard-fill">bi-keyboard-fill</option>
                                        <option value="bi-keyboard" data-icon="bi-keyboard">bi-keyboard</option>
                                        <option value="bi-ladder" data-icon="bi-ladder">bi-ladder</option>
                                        <option value="bi-lamp-fill" data-icon="bi-lamp-fill">bi-lamp-fill</option>
                                        <option value="bi-lamp" data-icon="bi-lamp">bi-lamp</option>
                                        <option value="bi-laptop-fill" data-icon="bi-laptop-fill">bi-laptop-fill</option>
                                        <option value="bi-laptop" data-icon="bi-laptop">bi-laptop</option>
                                        <option value="bi-layer-backward" data-icon="bi-layer-backward">bi-layer-backward</option>
                                        <option value="bi-layer-forward" data-icon="bi-layer-forward">bi-layer-forward</option>
                                        <option value="bi-layers-fill" data-icon="bi-layers-fill">bi-layers-fill</option>
                                        <option value="bi-layers-half" data-icon="bi-layers-half">bi-layers-half</option>
                                        <option value="bi-layers" data-icon="bi-layers">bi-layers</option>
                                        <option value="bi-layout-sidebar-inset-reverse" data-icon="bi-layout-sidebar-inset-reverse">bi-layout-sidebar-inset-reverse</option>
                                        <option value="bi-layout-sidebar-inset" data-icon="bi-layout-sidebar-inset">bi-layout-sidebar-inset</option>
                                        <option value="bi-layout-sidebar-reverse" data-icon="bi-layout-sidebar-reverse">bi-layout-sidebar-reverse</option>
                                        <option value="bi-layout-sidebar" data-icon="bi-layout-sidebar">bi-layout-sidebar</option>
                                        <option value="bi-layout-split" data-icon="bi-layout-split">bi-layout-split</option>
                                        <option value="bi-layout-text-sidebar-reverse" data-icon="bi-layout-text-sidebar-reverse">bi-layout-text-sidebar-reverse</option>
                                        <option value="bi-layout-text-sidebar" data-icon="bi-layout-text-sidebar">bi-layout-text-sidebar</option>
                                        <option value="bi-layout-text-window-reverse" data-icon="bi-layout-text-window-reverse">bi-layout-text-window-reverse</option>
                                        <option value="bi-layout-text-window" data-icon="bi-layout-text-window">bi-layout-text-window</option>
                                        <option value="bi-layout-three-columns" data-icon="bi-layout-three-columns">bi-layout-three-columns</option>
                                        <option value="bi-layout-wtf" data-icon="bi-layout-wtf">bi-layout-wtf</option>
                                        <option value="bi-life-preserver" data-icon="bi-life-preserver">bi-life-preserver</option>
                                        <option value="bi-lightbulb-fill" data-icon="bi-lightbulb-fill">bi-lightbulb-fill</option>
                                        <option value="bi-lightbulb-off-fill" data-icon="bi-lightbulb-off-fill">bi-lightbulb-off-fill</option>
                                        <option value="bi-lightbulb-off" data-icon="bi-lightbulb-off">bi-lightbulb-off</option>
                                        <option value="bi-lightbulb" data-icon="bi-lightbulb">bi-lightbulb</option>
                                        <option value="bi-lightning-charge-fill" data-icon="bi-lightning-charge-fill">bi-lightning-charge-fill</option>
                                        <option value="bi-lightning-charge" data-icon="bi-lightning-charge">bi-lightning-charge</option>
                                        <option value="bi-lightning-fill" data-icon="bi-lightning-fill">bi-lightning-fill</option>
                                        <option value="bi-lightning" data-icon="bi-lightning">bi-lightning</option>
                                        <option value="bi-link-45deg" data-icon="bi-link-45deg">bi-link-45deg</option>
                                        <option value="bi-link" data-icon="bi-link">bi-link</option>
                                        <option value="bi-linkedin" data-icon="bi-linkedin">bi-linkedin</option>
                                        <option value="bi-list-check" data-icon="bi-list-check">bi-list-check</option>
                                        <option value="bi-list-nested" data-icon="bi-list-nested">bi-list-nested</option>
                                        <option value="bi-list-ol" data-icon="bi-list-ol">bi-list-ol</option>
                                        <option value="bi-list-stars" data-icon="bi-list-stars">bi-list-stars</option>
                                        <option value="bi-list-task" data-icon="bi-list-task">bi-list-task</option>
                                        <option value="bi-list-ul" data-icon="bi-list-ul">bi-list-ul</option>
                                        <option value="bi-list" data-icon="bi-list">bi-list</option>
                                        <option value="bi-lock-fill" data-icon="bi-lock-fill">bi-lock-fill</option>
                                        <option value="bi-lock" data-icon="bi-lock">bi-lock</option>
                                        <option value="bi-mailbox" data-icon="bi-mailbox">bi-mailbox</option>
                                        <option value="bi-mailbox2" data-icon="bi-mailbox2">bi-mailbox2</option>
                                        <option value="bi-map-fill" data-icon="bi-map-fill">bi-map-fill</option>
                                        <option value="bi-map" data-icon="bi-map">bi-map</option>
                                        <option value="bi-markdown-fill" data-icon="bi-markdown-fill">bi-markdown-fill</option>
                                        <option value="bi-markdown" data-icon="bi-markdown">bi-markdown</option>
                                        <option value="bi-mask" data-icon="bi-mask">bi-mask</option>
                                        <option value="bi-megaphone-fill" data-icon="bi-megaphone-fill">bi-megaphone-fill</option>
                                        <option value="bi-megaphone" data-icon="bi-megaphone">bi-megaphone</option>
                                        <option value="bi-menu-app-fill" data-icon="bi-menu-app-fill">bi-menu-app-fill</option>
                                        <option value="bi-menu-app" data-icon="bi-menu-app">bi-menu-app</option>
                                        <option value="bi-menu-button-fill" data-icon="bi-menu-button-fill">bi-menu-button-fill</option>
                                        <option value="bi-menu-button-wide-fill" data-icon="bi-menu-button-wide-fill">bi-menu-button-wide-fill</option>
                                        <option value="bi-menu-button-wide" data-icon="bi-menu-button-wide">bi-menu-button-wide</option>
                                        <option value="bi-menu-button" data-icon="bi-menu-button">bi-menu-button</option>
                                        <option value="bi-menu-down" data-icon="bi-menu-down">bi-menu-down</option>
                                        <option value="bi-menu-up" data-icon="bi-menu-up">bi-menu-up</option>
                                        <option value="bi-mic-fill" data-icon="bi-mic-fill">bi-mic-fill</option>
                                        <option value="bi-mic-mute-fill" data-icon="bi-mic-mute-fill">bi-mic-mute-fill</option>
                                        <option value="bi-mic-mute" data-icon="bi-mic-mute">bi-mic-mute</option>
                                        <option value="bi-mic" data-icon="bi-mic">bi-mic</option>
                                        <option value="bi-minecart-loaded" data-icon="bi-minecart-loaded">bi-minecart-loaded</option>
                                        <option value="bi-minecart" data-icon="bi-minecart">bi-minecart</option>
                                        <option value="bi-moisture" data-icon="bi-moisture">bi-moisture</option>
                                        <option value="bi-moon-fill" data-icon="bi-moon-fill">bi-moon-fill</option>
                                        <option value="bi-moon-stars-fill" data-icon="bi-moon-stars-fill">bi-moon-stars-fill</option>
                                        <option value="bi-moon-stars" data-icon="bi-moon-stars">bi-moon-stars</option>
                                        <option value="bi-moon" data-icon="bi-moon">bi-moon</option>
                                        <option value="bi-mouse-fill" data-icon="bi-mouse-fill">bi-mouse-fill</option>
                                        <option value="bi-mouse" data-icon="bi-mouse">bi-mouse</option>
                                        <option value="bi-mouse2-fill" data-icon="bi-mouse2-fill">bi-mouse2-fill</option>
                                        <option value="bi-mouse2" data-icon="bi-mouse2">bi-mouse2</option>
                                        <option value="bi-mouse3-fill" data-icon="bi-mouse3-fill">bi-mouse3-fill</option>
                                        <option value="bi-mouse3" data-icon="bi-mouse3">bi-mouse3</option>
                                        <option value="bi-music-note-beamed" data-icon="bi-music-note-beamed">bi-music-note-beamed</option>
                                        <option value="bi-music-note-list" data-icon="bi-music-note-list">bi-music-note-list</option>
                                        <option value="bi-music-note" data-icon="bi-music-note">bi-music-note</option>
                                        <option value="bi-music-player-fill" data-icon="bi-music-player-fill">bi-music-player-fill</option>
                                        <option value="bi-music-player" data-icon="bi-music-player">bi-music-player</option>
                                        <option value="bi-newspaper" data-icon="bi-newspaper">bi-newspaper</option>
                                        <option value="bi-node-minus-fill" data-icon="bi-node-minus-fill">bi-node-minus-fill</option>
                                        <option value="bi-node-minus" data-icon="bi-node-minus">bi-node-minus</option>
                                        <option value="bi-node-plus-fill" data-icon="bi-node-plus-fill">bi-node-plus-fill</option>
                                        <option value="bi-node-plus" data-icon="bi-node-plus">bi-node-plus</option>
                                        <option value="bi-nut-fill" data-icon="bi-nut-fill">bi-nut-fill</option>
                                        <option value="bi-nut" data-icon="bi-nut">bi-nut</option>
                                        <option value="bi-octagon-fill" data-icon="bi-octagon-fill">bi-octagon-fill</option>
                                        <option value="bi-octagon-half" data-icon="bi-octagon-half">bi-octagon-half</option>
                                        <option value="bi-octagon" data-icon="bi-octagon">bi-octagon</option>
                                        <option value="bi-option" data-icon="bi-option">bi-option</option>
                                        <option value="bi-outlet" data-icon="bi-outlet">bi-outlet</option>
                                        <option value="bi-paint-bucket" data-icon="bi-paint-bucket">bi-paint-bucket</option>
                                        <option value="bi-palette-fill" data-icon="bi-palette-fill">bi-palette-fill</option>
                                        <option value="bi-palette" data-icon="bi-palette">bi-palette</option>
                                        <option value="bi-palette2" data-icon="bi-palette2">bi-palette2</option>
                                        <option value="bi-paperclip" data-icon="bi-paperclip">bi-paperclip</option>
                                        <option value="bi-paragraph" data-icon="bi-paragraph">bi-paragraph</option>
                                        <option value="bi-patch-check-fill" data-icon="bi-patch-check-fill">bi-patch-check-fill</option>
                                        <option value="bi-patch-check" data-icon="bi-patch-check">bi-patch-check</option>
                                        <option value="bi-patch-exclamation-fill" data-icon="bi-patch-exclamation-fill">bi-patch-exclamation-fill</option>
                                        <option value="bi-patch-exclamation" data-icon="bi-patch-exclamation">bi-patch-exclamation</option>
                                        <option value="bi-patch-minus-fill" data-icon="bi-patch-minus-fill">bi-patch-minus-fill</option>
                                        <option value="bi-patch-minus" data-icon="bi-patch-minus">bi-patch-minus</option>
                                        <option value="bi-patch-plus-fill" data-icon="bi-patch-plus-fill">bi-patch-plus-fill</option>
                                        <option value="bi-patch-plus" data-icon="bi-patch-plus">bi-patch-plus</option>
                                        <option value="bi-patch-question-fill" data-icon="bi-patch-question-fill">bi-patch-question-fill</option>
                                        <option value="bi-patch-question" data-icon="bi-patch-question">bi-patch-question</option>
                                        <option value="bi-pause-btn-fill" data-icon="bi-pause-btn-fill">bi-pause-btn-fill</option>
                                        <option value="bi-pause-btn" data-icon="bi-pause-btn">bi-pause-btn</option>
                                        <option value="bi-pause-circle-fill" data-icon="bi-pause-circle-fill">bi-pause-circle-fill</option>
                                        <option value="bi-pause-circle" data-icon="bi-pause-circle">bi-pause-circle</option>
                                        <option value="bi-pause-fill" data-icon="bi-pause-fill">bi-pause-fill</option>
                                        <option value="bi-pause" data-icon="bi-pause">bi-pause</option>
                                        <option value="bi-peace-fill" data-icon="bi-peace-fill">bi-peace-fill</option>
                                        <option value="bi-peace" data-icon="bi-peace">bi-peace</option>
                                        <option value="bi-pen-fill" data-icon="bi-pen-fill">bi-pen-fill</option>
                                        <option value="bi-pen" data-icon="bi-pen">bi-pen</option>
                                        <option value="bi-pencil-fill" data-icon="bi-pencil-fill">bi-pencil-fill</option>
                                        <option value="bi-pencil-square" data-icon="bi-pencil-square">bi-pencil-square</option>
                                        <option value="bi-pencil" data-icon="bi-pencil">bi-pencil</option>
                                        <option value="bi-pentagon-fill" data-icon="bi-pentagon-fill">bi-pentagon-fill</option>
                                        <option value="bi-pentagon-half" data-icon="bi-pentagon-half">bi-pentagon-half</option>
                                        <option value="bi-pentagon" data-icon="bi-pentagon">bi-pentagon</option>
                                        <option value="bi-people-fill" data-icon="bi-people-fill">bi-people-fill</option>
                                        <option value="bi-people" data-icon="bi-people">bi-people</option>
                                        <option value="bi-percent" data-icon="bi-percent">bi-percent</option>
                                        <option value="bi-person-badge-fill" data-icon="bi-person-badge-fill">bi-person-badge-fill</option>
                                        <option value="bi-person-badge" data-icon="bi-person-badge">bi-person-badge</option>
                                        <option value="bi-person-bounding-box" data-icon="bi-person-bounding-box">bi-person-bounding-box</option>
                                        <option value="bi-person-check-fill" data-icon="bi-person-check-fill">bi-person-check-fill</option>
                                        <option value="bi-person-check" data-icon="bi-person-check">bi-person-check</option>
                                        <option value="bi-person-circle" data-icon="bi-person-circle">bi-person-circle</option>
                                        <option value="bi-person-dash-fill" data-icon="bi-person-dash-fill">bi-person-dash-fill</option>
                                        <option value="bi-person-dash" data-icon="bi-person-dash">bi-person-dash</option>
                                        <option value="bi-person-fill" data-icon="bi-person-fill">bi-person-fill</option>
                                        <option value="bi-person-lines-fill" data-icon="bi-person-lines-fill">bi-person-lines-fill</option>
                                        <option value="bi-person-plus-fill" data-icon="bi-person-plus-fill">bi-person-plus-fill</option>
                                        <option value="bi-person-plus" data-icon="bi-person-plus">bi-person-plus</option>
                                        <option value="bi-person-square" data-icon="bi-person-square">bi-person-square</option>
                                        <option value="bi-person-x-fill" data-icon="bi-person-x-fill">bi-person-x-fill</option>
                                        <option value="bi-person-x" data-icon="bi-person-x">bi-person-x</option>
                                        <option value="bi-person" data-icon="bi-person">bi-person</option>
                                        <option value="bi-phone-fill" data-icon="bi-phone-fill">bi-phone-fill</option>
                                        <option value="bi-phone-landscape-fill" data-icon="bi-phone-landscape-fill">bi-phone-landscape-fill</option>
                                        <option value="bi-phone-landscape" data-icon="bi-phone-landscape">bi-phone-landscape</option>
                                        <option value="bi-phone-vibrate-fill" data-icon="bi-phone-vibrate-fill">bi-phone-vibrate-fill</option>
                                        <option value="bi-phone-vibrate" data-icon="bi-phone-vibrate">bi-phone-vibrate</option>
                                        <option value="bi-phone" data-icon="bi-phone">bi-phone</option>
                                        <option value="bi-pie-chart-fill" data-icon="bi-pie-chart-fill">bi-pie-chart-fill</option>
                                        <option value="bi-pie-chart" data-icon="bi-pie-chart">bi-pie-chart</option>
                                        <option value="bi-pin-angle-fill" data-icon="bi-pin-angle-fill">bi-pin-angle-fill</option>
                                        <option value="bi-pin-angle" data-icon="bi-pin-angle">bi-pin-angle</option>
                                        <option value="bi-pin-fill" data-icon="bi-pin-fill">bi-pin-fill</option>
                                        <option value="bi-pin" data-icon="bi-pin">bi-pin</option>
                                        <option value="bi-pip-fill" data-icon="bi-pip-fill">bi-pip-fill</option>
                                        <option value="bi-pip" data-icon="bi-pip">bi-pip</option>
                                        <option value="bi-play-btn-fill" data-icon="bi-play-btn-fill">bi-play-btn-fill</option>
                                        <option value="bi-play-btn" data-icon="bi-play-btn">bi-play-btn</option>
                                        <option value="bi-play-circle-fill" data-icon="bi-play-circle-fill">bi-play-circle-fill</option>
                                        <option value="bi-play-circle" data-icon="bi-play-circle">bi-play-circle</option>
                                        <option value="bi-play-fill" data-icon="bi-play-fill">bi-play-fill</option>
                                        <option value="bi-play" data-icon="bi-play">bi-play</option>
                                        <option value="bi-plug-fill" data-icon="bi-plug-fill">bi-plug-fill</option>
                                        <option value="bi-plug" data-icon="bi-plug">bi-plug</option>
                                        <option value="bi-plus-circle-dotted" data-icon="bi-plus-circle-dotted">bi-plus-circle-dotted</option>
                                        <option value="bi-plus-circle-fill" data-icon="bi-plus-circle-fill">bi-plus-circle-fill</option>
                                        <option value="bi-plus-circle" data-icon="bi-plus-circle">bi-plus-circle</option>
                                        <option value="bi-plus-square-dotted" data-icon="bi-plus-square-dotted">bi-plus-square-dotted</option>
                                        <option value="bi-plus-square-fill" data-icon="bi-plus-square-fill">bi-plus-square-fill</option>
                                        <option value="bi-plus-square" data-icon="bi-plus-square">bi-plus-square</option>
                                        <option value="bi-plus" data-icon="bi-plus">bi-plus</option>
                                        <option value="bi-power" data-icon="bi-power">bi-power</option>
                                        <option value="bi-printer-fill" data-icon="bi-printer-fill">bi-printer-fill</option>
                                        <option value="bi-printer" data-icon="bi-printer">bi-printer</option>
                                        <option value="bi-puzzle-fill" data-icon="bi-puzzle-fill">bi-puzzle-fill</option>
                                        <option value="bi-puzzle" data-icon="bi-puzzle">bi-puzzle</option>
                                        <option value="bi-question-circle-fill" data-icon="bi-question-circle-fill">bi-question-circle-fill</option>
                                        <option value="bi-question-circle" data-icon="bi-question-circle">bi-question-circle</option>
                                        <option value="bi-question-diamond-fill" data-icon="bi-question-diamond-fill">bi-question-diamond-fill</option>
                                        <option value="bi-question-diamond" data-icon="bi-question-diamond">bi-question-diamond</option>
                                        <option value="bi-question-octagon-fill" data-icon="bi-question-octagon-fill">bi-question-octagon-fill</option>
                                        <option value="bi-question-octagon" data-icon="bi-question-octagon">bi-question-octagon</option>
                                        <option value="bi-question-square-fill" data-icon="bi-question-square-fill">bi-question-square-fill</option>
                                        <option value="bi-question-square" data-icon="bi-question-square">bi-question-square</option>
                                        <option value="bi-question" data-icon="bi-question">bi-question</option>
                                        <option value="bi-rainbow" data-icon="bi-rainbow">bi-rainbow</option>
                                        <option value="bi-receipt-cutoff" data-icon="bi-receipt-cutoff">bi-receipt-cutoff</option>
                                        <option value="bi-receipt" data-icon="bi-receipt">bi-receipt</option>
                                        <option value="bi-reception-0" data-icon="bi-reception-0">bi-reception-0</option>
                                        <option value="bi-reception-1" data-icon="bi-reception-1">bi-reception-1</option>
                                        <option value="bi-reception-2" data-icon="bi-reception-2">bi-reception-2</option>
                                        <option value="bi-reception-3" data-icon="bi-reception-3">bi-reception-3</option>
                                        <option value="bi-reception-4" data-icon="bi-reception-4">bi-reception-4</option>
                                        <option value="bi-record-btn-fill" data-icon="bi-record-btn-fill">bi-record-btn-fill</option>
                                        <option value="bi-record-btn" data-icon="bi-record-btn">bi-record-btn</option>
                                        <option value="bi-record-circle-fill" data-icon="bi-record-circle-fill">bi-record-circle-fill</option>
                                        <option value="bi-record-circle" data-icon="bi-record-circle">bi-record-circle</option>
                                        <option value="bi-record-fill" data-icon="bi-record-fill">bi-record-fill</option>
                                        <option value="bi-record" data-icon="bi-record">bi-record</option>
                                        <option value="bi-record2-fill" data-icon="bi-record2-fill">bi-record2-fill</option>
                                        <option value="bi-record2" data-icon="bi-record2">bi-record2</option>
                                        <option value="bi-reply-all-fill" data-icon="bi-reply-all-fill">bi-reply-all-fill</option>
                                        <option value="bi-reply-all" data-icon="bi-reply-all">bi-reply-all</option>
                                        <option value="bi-reply-fill" data-icon="bi-reply-fill">bi-reply-fill</option>
                                        <option value="bi-reply" data-icon="bi-reply">bi-reply</option>
                                        <option value="bi-rss-fill" data-icon="bi-rss-fill">bi-rss-fill</option>
                                        <option value="bi-rss" data-icon="bi-rss">bi-rss</option>
                                        <option value="bi-rulers" data-icon="bi-rulers">bi-rulers</option>
                                        <option value="bi-save-fill" data-icon="bi-save-fill">bi-save-fill</option>
                                        <option value="bi-save" data-icon="bi-save">bi-save</option>
                                        <option value="bi-save2-fill" data-icon="bi-save2-fill">bi-save2-fill</option>
                                        <option value="bi-save2" data-icon="bi-save2">bi-save2</option>
                                        <option value="bi-scissors" data-icon="bi-scissors">bi-scissors</option>
                                        <option value="bi-screwdriver" data-icon="bi-screwdriver">bi-screwdriver</option>
                                        <option value="bi-search" data-icon="bi-search">bi-search</option>
                                        <option value="bi-segmented-nav" data-icon="bi-segmented-nav">bi-segmented-nav</option>
                                        <option value="bi-server" data-icon="bi-server">bi-server</option>
                                        <option value="bi-share-fill" data-icon="bi-share-fill">bi-share-fill</option>
                                        <option value="bi-share" data-icon="bi-share">bi-share</option>
                                        <option value="bi-shield-check" data-icon="bi-shield-check">bi-shield-check</option>
                                        <option value="bi-shield-exclamation" data-icon="bi-shield-exclamation">bi-shield-exclamation</option>
                                        <option value="bi-shield-fill-check" data-icon="bi-shield-fill-check">bi-shield-fill-check</option>
                                        <option value="bi-shield-fill-exclamation" data-icon="bi-shield-fill-exclamation">bi-shield-fill-exclamation</option>
                                        <option value="bi-shield-fill-minus" data-icon="bi-shield-fill-minus">bi-shield-fill-minus</option>
                                        <option value="bi-shield-fill-plus" data-icon="bi-shield-fill-plus">bi-shield-fill-plus</option>
                                        <option value="bi-shield-fill-x" data-icon="bi-shield-fill-x">bi-shield-fill-x</option>
                                        <option value="bi-shield-fill" data-icon="bi-shield-fill">bi-shield-fill</option>
                                        <option value="bi-shield-lock-fill" data-icon="bi-shield-lock-fill">bi-shield-lock-fill</option>
                                        <option value="bi-shield-lock" data-icon="bi-shield-lock">bi-shield-lock</option>
                                        <option value="bi-shield-minus" data-icon="bi-shield-minus">bi-shield-minus</option>
                                        <option value="bi-shield-plus" data-icon="bi-shield-plus">bi-shield-plus</option>
                                        <option value="bi-shield-shaded" data-icon="bi-shield-shaded">bi-shield-shaded</option>
                                        <option value="bi-shield-slash-fill" data-icon="bi-shield-slash-fill">bi-shield-slash-fill</option>
                                        <option value="bi-shield-slash" data-icon="bi-shield-slash">bi-shield-slash</option>
                                        <option value="bi-shield-x" data-icon="bi-shield-x">bi-shield-x</option>
                                        <option value="bi-shield" data-icon="bi-shield">bi-shield</option>
                                        <option value="bi-shift-fill" data-icon="bi-shift-fill">bi-shift-fill</option>
                                        <option value="bi-shift" data-icon="bi-shift">bi-shift</option>
                                        <option value="bi-shop-window" data-icon="bi-shop-window">bi-shop-window</option>
                                        <option value="bi-shop" data-icon="bi-shop">bi-shop</option>
                                        <option value="bi-shuffle" data-icon="bi-shuffle">bi-shuffle</option>
                                        <option value="bi-signpost-2-fill" data-icon="bi-signpost-2-fill">bi-signpost-2-fill</option>
                                        <option value="bi-signpost-2" data-icon="bi-signpost-2">bi-signpost-2</option>
                                        <option value="bi-signpost-fill" data-icon="bi-signpost-fill">bi-signpost-fill</option>
                                        <option value="bi-signpost-split-fill" data-icon="bi-signpost-split-fill">bi-signpost-split-fill</option>
                                        <option value="bi-signpost-split" data-icon="bi-signpost-split">bi-signpost-split</option>
                                        <option value="bi-signpost" data-icon="bi-signpost">bi-signpost</option>
                                        <option value="bi-sim-fill" data-icon="bi-sim-fill">bi-sim-fill</option>
                                        <option value="bi-sim" data-icon="bi-sim">bi-sim</option>
                                        <option value="bi-skip-backward-btn-fill" data-icon="bi-skip-backward-btn-fill">bi-skip-backward-btn-fill</option>
                                        <option value="bi-skip-backward-btn" data-icon="bi-skip-backward-btn">bi-skip-backward-btn</option>
                                        <option value="bi-skip-backward-circle-fill" data-icon="bi-skip-backward-circle-fill">bi-skip-backward-circle-fill</option>
                                        <option value="bi-skip-backward-circle" data-icon="bi-skip-backward-circle">bi-skip-backward-circle</option>
                                        <option value="bi-skip-backward-fill" data-icon="bi-skip-backward-fill">bi-skip-backward-fill</option>
                                        <option value="bi-skip-backward" data-icon="bi-skip-backward">bi-skip-backward</option>
                                        <option value="bi-skip-end-btn-fill" data-icon="bi-skip-end-btn-fill">bi-skip-end-btn-fill</option>
                                        <option value="bi-skip-end-btn" data-icon="bi-skip-end-btn">bi-skip-end-btn</option>
                                        <option value="bi-skip-end-circle-fill" data-icon="bi-skip-end-circle-fill">bi-skip-end-circle-fill</option>
                                        <option value="bi-skip-end-circle" data-icon="bi-skip-end-circle">bi-skip-end-circle</option>
                                        <option value="bi-skip-end-fill" data-icon="bi-skip-end-fill">bi-skip-end-fill</option>
                                        <option value="bi-skip-end" data-icon="bi-skip-end">bi-skip-end</option>
                                        <option value="bi-skip-forward-btn-fill" data-icon="bi-skip-forward-btn-fill">bi-skip-forward-btn-fill</option>
                                        <option value="bi-skip-forward-btn" data-icon="bi-skip-forward-btn">bi-skip-forward-btn</option>
                                        <option value="bi-skip-forward-circle-fill" data-icon="bi-skip-forward-circle-fill">bi-skip-forward-circle-fill</option>
                                        <option value="bi-skip-forward-circle" data-icon="bi-skip-forward-circle">bi-skip-forward-circle</option>
                                        <option value="bi-skip-forward-fill" data-icon="bi-skip-forward-fill">bi-skip-forward-fill</option>
                                        <option value="bi-skip-forward" data-icon="bi-skip-forward">bi-skip-forward</option>
                                        <option value="bi-skip-start-btn-fill" data-icon="bi-skip-start-btn-fill">bi-skip-start-btn-fill</option>
                                        <option value="bi-skip-start-btn" data-icon="bi-skip-start-btn">bi-skip-start-btn</option>
                                        <option value="bi-skip-start-circle-fill" data-icon="bi-skip-start-circle-fill">bi-skip-start-circle-fill</option>
                                        <option value="bi-skip-start-circle" data-icon="bi-skip-start-circle">bi-skip-start-circle</option>
                                        <option value="bi-skip-start-fill" data-icon="bi-skip-start-fill">bi-skip-start-fill</option>
                                        <option value="bi-skip-start" data-icon="bi-skip-start">bi-skip-start</option>
                                        <option value="bi-slack" data-icon="bi-slack">bi-slack</option>
                                        <option value="bi-slash-circle-fill" data-icon="bi-slash-circle-fill">bi-slash-circle-fill</option>
                                        <option value="bi-slash-circle" data-icon="bi-slash-circle">bi-slash-circle</option>
                                        <option value="bi-slash-square-fill" data-icon="bi-slash-square-fill">bi-slash-square-fill</option>
                                        <option value="bi-slash-square" data-icon="bi-slash-square">bi-slash-square</option>
                                        <option value="bi-slash" data-icon="bi-slash">bi-slash</option>
                                        <option value="bi-sliders" data-icon="bi-sliders">bi-sliders</option>
                                        <option value="bi-smartwatch" data-icon="bi-smartwatch">bi-smartwatch</option>
                                        <option value="bi-snow" data-icon="bi-snow">bi-snow</option>
                                        <option value="bi-snow2" data-icon="bi-snow2">bi-snow2</option>
                                        <option value="bi-snow3" data-icon="bi-snow3">bi-snow3</option>
                                        <option value="bi-sort-alpha-down-alt" data-icon="bi-sort-alpha-down-alt">bi-sort-alpha-down-alt</option>
                                        <option value="bi-sort-alpha-down" data-icon="bi-sort-alpha-down">bi-sort-alpha-down</option>
                                        <option value="bi-sort-alpha-up-alt" data-icon="bi-sort-alpha-up-alt">bi-sort-alpha-up-alt</option>
                                        <option value="bi-sort-alpha-up" data-icon="bi-sort-alpha-up">bi-sort-alpha-up</option>
                                        <option value="bi-sort-down-alt" data-icon="bi-sort-down-alt">bi-sort-down-alt</option>
                                        <option value="bi-sort-down" data-icon="bi-sort-down">bi-sort-down</option>
                                        <option value="bi-sort-numeric-down-alt" data-icon="bi-sort-numeric-down-alt">bi-sort-numeric-down-alt</option>
                                        <option value="bi-sort-numeric-down" data-icon="bi-sort-numeric-down">bi-sort-numeric-down</option>
                                        <option value="bi-sort-numeric-up-alt" data-icon="bi-sort-numeric-up-alt">bi-sort-numeric-up-alt</option>
                                        <option value="bi-sort-numeric-up" data-icon="bi-sort-numeric-up">bi-sort-numeric-up</option>
                                        <option value="bi-sort-up-alt" data-icon="bi-sort-up-alt">bi-sort-up-alt</option>
                                        <option value="bi-sort-up" data-icon="bi-sort-up">bi-sort-up</option>
                                        <option value="bi-soundwave" data-icon="bi-soundwave">bi-soundwave</option>
                                        <option value="bi-speaker-fill" data-icon="bi-speaker-fill">bi-speaker-fill</option>
                                        <option value="bi-speaker" data-icon="bi-speaker">bi-speaker</option>
                                        <option value="bi-speedometer" data-icon="bi-speedometer">bi-speedometer</option>
                                        <option value="bi-speedometer2" data-icon="bi-speedometer2">bi-speedometer2</option>
                                        <option value="bi-spellcheck" data-icon="bi-spellcheck">bi-spellcheck</option>
                                        <option value="bi-square-fill" data-icon="bi-square-fill">bi-square-fill</option>
                                        <option value="bi-square-half" data-icon="bi-square-half">bi-square-half</option>
                                        <option value="bi-square" data-icon="bi-square">bi-square</option>
                                        <option value="bi-stack" data-icon="bi-stack">bi-stack</option>
                                        <option value="bi-star-fill" data-icon="bi-star-fill">bi-star-fill</option>
                                        <option value="bi-star-half" data-icon="bi-star-half">bi-star-half</option>
                                        <option value="bi-star" data-icon="bi-star">bi-star</option>
                                        <option value="bi-stars" data-icon="bi-stars">bi-stars</option>
                                        <option value="bi-stickies-fill" data-icon="bi-stickies-fill">bi-stickies-fill</option>
                                        <option value="bi-stickies" data-icon="bi-stickies">bi-stickies</option>
                                        <option value="bi-sticky-fill" data-icon="bi-sticky-fill">bi-sticky-fill</option>
                                        <option value="bi-sticky" data-icon="bi-sticky">bi-sticky</option>
                                        <option value="bi-stop-btn-fill" data-icon="bi-stop-btn-fill">bi-stop-btn-fill</option>
                                        <option value="bi-stop-btn" data-icon="bi-stop-btn">bi-stop-btn</option>
                                        <option value="bi-stop-circle-fill" data-icon="bi-stop-circle-fill">bi-stop-circle-fill</option>
                                        <option value="bi-stop-circle" data-icon="bi-stop-circle">bi-stop-circle</option>
                                        <option value="bi-stop-fill" data-icon="bi-stop-fill">bi-stop-fill</option>
                                        <option value="bi-stop" data-icon="bi-stop">bi-stop</option>
                                        <option value="bi-stoplights-fill" data-icon="bi-stoplights-fill">bi-stoplights-fill</option>
                                        <option value="bi-stoplights" data-icon="bi-stoplights">bi-stoplights</option>
                                        <option value="bi-stopwatch-fill" data-icon="bi-stopwatch-fill">bi-stopwatch-fill</option>
                                        <option value="bi-stopwatch" data-icon="bi-stopwatch">bi-stopwatch</option>
                                        <option value="bi-subtract" data-icon="bi-subtract">bi-subtract</option>
                                        <option value="bi-suit-club-fill" data-icon="bi-suit-club-fill">bi-suit-club-fill</option>
                                        <option value="bi-suit-club" data-icon="bi-suit-club">bi-suit-club</option>
                                        <option value="bi-suit-diamond-fill" data-icon="bi-suit-diamond-fill">bi-suit-diamond-fill</option>
                                        <option value="bi-suit-diamond" data-icon="bi-suit-diamond">bi-suit-diamond</option>
                                        <option value="bi-suit-heart-fill" data-icon="bi-suit-heart-fill">bi-suit-heart-fill</option>
                                        <option value="bi-suit-heart" data-icon="bi-suit-heart">bi-suit-heart</option>
                                        <option value="bi-suit-spade-fill" data-icon="bi-suit-spade-fill">bi-suit-spade-fill</option>
                                        <option value="bi-suit-spade" data-icon="bi-suit-spade">bi-suit-spade</option>
                                        <option value="bi-sun-fill" data-icon="bi-sun-fill">bi-sun-fill</option>
                                        <option value="bi-sun" data-icon="bi-sun">bi-sun</option>
                                        <option value="bi-sunglasses" data-icon="bi-sunglasses">bi-sunglasses</option>
                                        <option value="bi-sunrise-fill" data-icon="bi-sunrise-fill">bi-sunrise-fill</option>
                                        <option value="bi-sunrise" data-icon="bi-sunrise">bi-sunrise</option>
                                        <option value="bi-sunset-fill" data-icon="bi-sunset-fill">bi-sunset-fill</option>
                                        <option value="bi-sunset" data-icon="bi-sunset">bi-sunset</option>
                                        <option value="bi-symmetry-horizontal" data-icon="bi-symmetry-horizontal">bi-symmetry-horizontal</option>
                                        <option value="bi-symmetry-vertical" data-icon="bi-symmetry-vertical">bi-symmetry-vertical</option>
                                        <option value="bi-table" data-icon="bi-table">bi-table</option>
                                        <option value="bi-tablet-fill" data-icon="bi-tablet-fill">bi-tablet-fill</option>
                                        <option value="bi-tablet-landscape-fill" data-icon="bi-tablet-landscape-fill">bi-tablet-landscape-fill</option>
                                        <option value="bi-tablet-landscape" data-icon="bi-tablet-landscape">bi-tablet-landscape</option>
                                        <option value="bi-tablet" data-icon="bi-tablet">bi-tablet</option>
                                        <option value="bi-tag-fill" data-icon="bi-tag-fill">bi-tag-fill</option>
                                        <option value="bi-tag" data-icon="bi-tag">bi-tag</option>
                                        <option value="bi-tags-fill" data-icon="bi-tags-fill">bi-tags-fill</option>
                                        <option value="bi-tags" data-icon="bi-tags">bi-tags</option>
                                        <option value="bi-telegram" data-icon="bi-telegram">bi-telegram</option>
                                        <option value="bi-telephone-fill" data-icon="bi-telephone-fill">bi-telephone-fill</option>
                                        <option value="bi-telephone-forward-fill" data-icon="bi-telephone-forward-fill">bi-telephone-forward-fill</option>
                                        <option value="bi-telephone-forward" data-icon="bi-telephone-forward">bi-telephone-forward</option>
                                        <option value="bi-telephone-inbound-fill" data-icon="bi-telephone-inbound-fill">bi-telephone-inbound-fill</option>
                                        <option value="bi-telephone-inbound" data-icon="bi-telephone-inbound">bi-telephone-inbound</option>
                                        <option value="bi-telephone-minus-fill" data-icon="bi-telephone-minus-fill">bi-telephone-minus-fill</option>
                                        <option value="bi-telephone-minus" data-icon="bi-telephone-minus">bi-telephone-minus</option>
                                        <option value="bi-telephone-outbound-fill" data-icon="bi-telephone-outbound-fill">bi-telephone-outbound-fill</option>
                                        <option value="bi-telephone-outbound" data-icon="bi-telephone-outbound">bi-telephone-outbound</option>
                                        <option value="bi-telephone-plus-fill" data-icon="bi-telephone-plus-fill">bi-telephone-plus-fill</option>
                                        <option value="bi-telephone-plus" data-icon="bi-telephone-plus">bi-telephone-plus</option>
                                        <option value="bi-telephone-x-fill" data-icon="bi-telephone-x-fill">bi-telephone-x-fill</option>
                                        <option value="bi-telephone-x" data-icon="bi-telephone-x">bi-telephone-x</option>
                                        <option value="bi-telephone" data-icon="bi-telephone">bi-telephone</option>
                                        <option value="bi-terminal-fill" data-icon="bi-terminal-fill">bi-terminal-fill</option>
                                        <option value="bi-terminal" data-icon="bi-terminal">bi-terminal</option>
                                        <option value="bi-text-center" data-icon="bi-text-center">bi-text-center</option>
                                        <option value="bi-text-indent-left" data-icon="bi-text-indent-left">bi-text-indent-left</option>
                                        <option value="bi-text-indent-right" data-icon="bi-text-indent-right">bi-text-indent-right</option>
                                        <option value="bi-text-left" data-icon="bi-text-left">bi-text-left</option>
                                        <option value="bi-text-paragraph" data-icon="bi-text-paragraph">bi-text-paragraph</option>
                                        <option value="bi-text-right" data-icon="bi-text-right">bi-text-right</option>
                                        <option value="bi-textarea-resize" data-icon="bi-textarea-resize">bi-textarea-resize</option>
                                        <option value="bi-textarea-t" data-icon="bi-textarea-t">bi-textarea-t</option>
                                        <option value="bi-textarea" data-icon="bi-textarea">bi-textarea</option>
                                        <option value="bi-thermometer-half" data-icon="bi-thermometer-half">bi-thermometer-half</option>
                                        <option value="bi-thermometer-high" data-icon="bi-thermometer-high">bi-thermometer-high</option>
                                        <option value="bi-thermometer-low" data-icon="bi-thermometer-low">bi-thermometer-low</option>
                                        <option value="bi-thermometer-snow" data-icon="bi-thermometer-snow">bi-thermometer-snow</option>
                                        <option value="bi-thermometer-sun" data-icon="bi-thermometer-sun">bi-thermometer-sun</option>
                                        <option value="bi-thermometer" data-icon="bi-thermometer">bi-thermometer</option>
                                        <option value="bi-three-dots-vertical" data-icon="bi-three-dots-vertical">bi-three-dots-vertical</option>
                                        <option value="bi-three-dots" data-icon="bi-three-dots">bi-three-dots</option>
                                        <option value="bi-toggle-off" data-icon="bi-toggle-off">bi-toggle-off</option>
                                        <option value="bi-toggle-on" data-icon="bi-toggle-on">bi-toggle-on</option>
                                        <option value="bi-toggle2-off" data-icon="bi-toggle2-off">bi-toggle2-off</option>
                                        <option value="bi-toggle2-on" data-icon="bi-toggle2-on">bi-toggle2-on</option>
                                        <option value="bi-toggles" data-icon="bi-toggles">bi-toggles</option>
                                        <option value="bi-toggles2" data-icon="bi-toggles2">bi-toggles2</option>
                                        <option value="bi-tools" data-icon="bi-tools">bi-tools</option>
                                        <option value="bi-tornado" data-icon="bi-tornado">bi-tornado</option>
                                        <option value="bi-trash-fill" data-icon="bi-trash-fill">bi-trash-fill</option>
                                        <option value="bi-trash" data-icon="bi-trash">bi-trash</option>
                                        <option value="bi-trash2-fill" data-icon="bi-trash2-fill">bi-trash2-fill</option>
                                        <option value="bi-trash2" data-icon="bi-trash2">bi-trash2</option>
                                        <option value="bi-tree-fill" data-icon="bi-tree-fill">bi-tree-fill</option>
                                        <option value="bi-tree" data-icon="bi-tree">bi-tree</option>
                                        <option value="bi-triangle-fill" data-icon="bi-triangle-fill">bi-triangle-fill</option>
                                        <option value="bi-triangle-half" data-icon="bi-triangle-half">bi-triangle-half</option>
                                        <option value="bi-triangle" data-icon="bi-triangle">bi-triangle</option>
                                        <option value="bi-trophy-fill" data-icon="bi-trophy-fill">bi-trophy-fill</option>
                                        <option value="bi-trophy" data-icon="bi-trophy">bi-trophy</option>
                                        <option value="bi-tropical-storm" data-icon="bi-tropical-storm">bi-tropical-storm</option>
                                        <option value="bi-truck-flatbed" data-icon="bi-truck-flatbed">bi-truck-flatbed</option>
                                        <option value="bi-truck" data-icon="bi-truck">bi-truck</option>
                                        <option value="bi-tsunami" data-icon="bi-tsunami">bi-tsunami</option>
                                        <option value="bi-tv-fill" data-icon="bi-tv-fill">bi-tv-fill</option>
                                        <option value="bi-tv" data-icon="bi-tv">bi-tv</option>
                                        <option value="bi-twitch" data-icon="bi-twitch">bi-twitch</option>
                                        <option value="bi-twitter" data-icon="bi-twitter">bi-twitter</option>
                                        <option value="bi-type-bold" data-icon="bi-type-bold">bi-type-bold</option>
                                        <option value="bi-type-h1" data-icon="bi-type-h1">bi-type-h1</option>
                                        <option value="bi-type-h2" data-icon="bi-type-h2">bi-type-h2</option>
                                        <option value="bi-type-h3" data-icon="bi-type-h3">bi-type-h3</option>
                                        <option value="bi-type-italic" data-icon="bi-type-italic">bi-type-italic</option>
                                        <option value="bi-type-strikethrough" data-icon="bi-type-strikethrough">bi-type-strikethrough</option>
                                        <option value="bi-type-underline" data-icon="bi-type-underline">bi-type-underline</option>
                                        <option value="bi-type" data-icon="bi-type">bi-type</option>
                                        <option value="bi-ui-checks-grid" data-icon="bi-ui-checks-grid">bi-ui-checks-grid</option>
                                        <option value="bi-ui-checks" data-icon="bi-ui-checks">bi-ui-checks</option>
                                        <option value="bi-ui-radios-grid" data-icon="bi-ui-radios-grid">bi-ui-radios-grid</option>
                                        <option value="bi-ui-radios" data-icon="bi-ui-radios">bi-ui-radios</option>
                                        <option value="bi-umbrella-fill" data-icon="bi-umbrella-fill">bi-umbrella-fill</option>
                                        <option value="bi-umbrella" data-icon="bi-umbrella">bi-umbrella</option>
                                        <option value="bi-union" data-icon="bi-union">bi-union</option>
                                        <option value="bi-unlock-fill" data-icon="bi-unlock-fill">bi-unlock-fill</option>
                                        <option value="bi-unlock" data-icon="bi-unlock">bi-unlock</option>
                                        <option value="bi-upc-scan" data-icon="bi-upc-scan">bi-upc-scan</option>
                                        <option value="bi-upc" data-icon="bi-upc">bi-upc</option>
                                        <option value="bi-upload" data-icon="bi-upload">bi-upload</option>
                                        <option value="bi-vector-pen" data-icon="bi-vector-pen">bi-vector-pen</option>
                                        <option value="bi-view-list" data-icon="bi-view-list">bi-view-list</option>
                                        <option value="bi-view-stacked" data-icon="bi-view-stacked">bi-view-stacked</option>
                                        <option value="bi-vinyl-fill" data-icon="bi-vinyl-fill">bi-vinyl-fill</option>
                                        <option value="bi-vinyl" data-icon="bi-vinyl">bi-vinyl</option>
                                        <option value="bi-voicemail" data-icon="bi-voicemail">bi-voicemail</option>
                                        <option value="bi-volume-down-fill" data-icon="bi-volume-down-fill">bi-volume-down-fill</option>
                                        <option value="bi-volume-down" data-icon="bi-volume-down">bi-volume-down</option>
                                        <option value="bi-volume-mute-fill" data-icon="bi-volume-mute-fill">bi-volume-mute-fill</option>
                                        <option value="bi-volume-mute" data-icon="bi-volume-mute">bi-volume-mute</option>
                                        <option value="bi-volume-off-fill" data-icon="bi-volume-off-fill">bi-volume-off-fill</option>
                                        <option value="bi-volume-off" data-icon="bi-volume-off">bi-volume-off</option>
                                        <option value="bi-volume-up-fill" data-icon="bi-volume-up-fill">bi-volume-up-fill</option>
                                        <option value="bi-volume-up" data-icon="bi-volume-up">bi-volume-up</option>
                                        <option value="bi-vr" data-icon="bi-vr">bi-vr</option>
                                        <option value="bi-wallet-fill" data-icon="bi-wallet-fill">bi-wallet-fill</option>
                                        <option value="bi-wallet" data-icon="bi-wallet">bi-wallet</option>
                                        <option value="bi-wallet2" data-icon="bi-wallet2">bi-wallet2</option>
                                        <option value="bi-watch" data-icon="bi-watch">bi-watch</option>
                                        <option value="bi-water" data-icon="bi-water">bi-water</option>
                                        <option value="bi-whatsapp" data-icon="bi-whatsapp">bi-whatsapp</option>
                                        <option value="bi-wifi-1" data-icon="bi-wifi-1">bi-wifi-1</option>
                                        <option value="bi-wifi-2" data-icon="bi-wifi-2">bi-wifi-2</option>
                                        <option value="bi-wifi-off" data-icon="bi-wifi-off">bi-wifi-off</option>
                                        <option value="bi-wifi" data-icon="bi-wifi">bi-wifi</option>
                                        <option value="bi-wind" data-icon="bi-wind">bi-wind</option>
                                        <option value="bi-window-dock" data-icon="bi-window-dock">bi-window-dock</option>
                                        <option value="bi-window-sidebar" data-icon="bi-window-sidebar">bi-window-sidebar</option>
                                        <option value="bi-window" data-icon="bi-window">bi-window</option>
                                        <option value="bi-wrench" data-icon="bi-wrench">bi-wrench</option>
                                        <option value="bi-x-circle-fill" data-icon="bi-x-circle-fill">bi-x-circle-fill</option>
                                        <option value="bi-x-circle" data-icon="bi-x-circle">bi-x-circle</option>
                                        <option value="bi-x-diamond-fill" data-icon="bi-x-diamond-fill">bi-x-diamond-fill</option>
                                        <option value="bi-x-diamond" data-icon="bi-x-diamond">bi-x-diamond</option>
                                        <option value="bi-x-octagon-fill" data-icon="bi-x-octagon-fill">bi-x-octagon-fill</option>
                                        <option value="bi-x-octagon" data-icon="bi-x-octagon">bi-x-octagon</option>
                                        <option value="bi-x-square-fill" data-icon="bi-x-square-fill">bi-x-square-fill</option>
                                        <option value="bi-x-square" data-icon="bi-x-square">bi-x-square</option>
                                        <option value="bi-x" data-icon="bi-x">bi-x</option>
                                        <option value="bi-youtube" data-icon="bi-youtube">bi-youtube</option>
                                        <option value="bi-zoom-in" data-icon="bi-zoom-in">bi-zoom-in</option>
                                        <option value="bi-zoom-out" data-icon="bi-zoom-out">bi-zoom-out</option>
                                        <option value="bi-bank" data-icon="bi-bank">bi-bank</option>
                                        <option value="bi-bank2" data-icon="bi-bank2">bi-bank2</option>
                                        <option value="bi-bell-slash-fill" data-icon="bi-bell-slash-fill">bi-bell-slash-fill</option>
                                        <option value="bi-bell-slash" data-icon="bi-bell-slash">bi-bell-slash</option>
                                        <option value="bi-cash-coin" data-icon="bi-cash-coin">bi-cash-coin</option>
                                        <option value="bi-check-lg" data-icon="bi-check-lg">bi-check-lg</option>
                                        <option value="bi-coin" data-icon="bi-coin">bi-coin</option>
                                        <option value="bi-currency-bitcoin" data-icon="bi-currency-bitcoin">bi-currency-bitcoin</option>
                                        <option value="bi-currency-dollar" data-icon="bi-currency-dollar">bi-currency-dollar</option>
                                        <option value="bi-currency-euro" data-icon="bi-currency-euro">bi-currency-euro</option>
                                        <option value="bi-currency-exchange" data-icon="bi-currency-exchange">bi-currency-exchange</option>
                                        <option value="bi-currency-pound" data-icon="bi-currency-pound">bi-currency-pound</option>
                                        <option value="bi-currency-yen" data-icon="bi-currency-yen">bi-currency-yen</option>
                                        <option value="bi-dash-lg" data-icon="bi-dash-lg">bi-dash-lg</option>
                                        <option value="bi-exclamation-lg" data-icon="bi-exclamation-lg">bi-exclamation-lg</option>
                                        <option value="bi-file-earmark-pdf-fill" data-icon="bi-file-earmark-pdf-fill">bi-file-earmark-pdf-fill</option>
                                        <option value="bi-file-earmark-pdf" data-icon="bi-file-earmark-pdf">bi-file-earmark-pdf</option>
                                        <option value="bi-file-pdf-fill" data-icon="bi-file-pdf-fill">bi-file-pdf-fill</option>
                                        <option value="bi-file-pdf" data-icon="bi-file-pdf">bi-file-pdf</option>
                                        <option value="bi-gender-ambiguous" data-icon="bi-gender-ambiguous">bi-gender-ambiguous</option>
                                        <option value="bi-gender-female" data-icon="bi-gender-female">bi-gender-female</option>
                                        <option value="bi-gender-male" data-icon="bi-gender-male">bi-gender-male</option>
                                        <option value="bi-gender-trans" data-icon="bi-gender-trans">bi-gender-trans</option>
                                        <option value="bi-headset-vr" data-icon="bi-headset-vr">bi-headset-vr</option>
                                        <option value="bi-info-lg" data-icon="bi-info-lg">bi-info-lg</option>
                                        <option value="bi-mastodon" data-icon="bi-mastodon">bi-mastodon</option>
                                        <option value="bi-messenger" data-icon="bi-messenger">bi-messenger</option>
                                        <option value="bi-piggy-bank-fill" data-icon="bi-piggy-bank-fill">bi-piggy-bank-fill</option>
                                        <option value="bi-piggy-bank" data-icon="bi-piggy-bank">bi-piggy-bank</option>
                                        <option value="bi-pin-map-fill" data-icon="bi-pin-map-fill">bi-pin-map-fill</option>
                                        <option value="bi-pin-map" data-icon="bi-pin-map">bi-pin-map</option>
                                        <option value="bi-plus-lg" data-icon="bi-plus-lg">bi-plus-lg</option>
                                        <option value="bi-question-lg" data-icon="bi-question-lg">bi-question-lg</option>
                                        <option value="bi-recycle" data-icon="bi-recycle">bi-recycle</option>
                                        <option value="bi-reddit" data-icon="bi-reddit">bi-reddit</option>
                                        <option value="bi-safe-fill" data-icon="bi-safe-fill">bi-safe-fill</option>
                                        <option value="bi-safe2-fill" data-icon="bi-safe2-fill">bi-safe2-fill</option>
                                        <option value="bi-safe2" data-icon="bi-safe2">bi-safe2</option>
                                        <option value="bi-sd-card-fill" data-icon="bi-sd-card-fill">bi-sd-card-fill</option>
                                        <option value="bi-sd-card" data-icon="bi-sd-card">bi-sd-card</option>
                                        <option value="bi-skype" data-icon="bi-skype">bi-skype</option>
                                        <option value="bi-slash-lg" data-icon="bi-slash-lg">bi-slash-lg</option>
                                        <option value="bi-translate" data-icon="bi-translate">bi-translate</option>
                                        <option value="bi-x-lg" data-icon="bi-x-lg">bi-x-lg</option>
                                        <option value="bi-safe" data-icon="bi-safe">bi-safe</option>
                                        <option value="bi-apple" data-icon="bi-apple">bi-apple</option>
                                        <option value="bi-microsoft" data-icon="bi-microsoft">bi-microsoft</option>
                                        <option value="bi-windows" data-icon="bi-windows">bi-windows</option>
                                        <option value="bi-behance" data-icon="bi-behance">bi-behance</option>
                                        <option value="bi-dribbble" data-icon="bi-dribbble">bi-dribbble</option>
                                        <option value="bi-line" data-icon="bi-line">bi-line</option>
                                        <option value="bi-medium" data-icon="bi-medium">bi-medium</option>
                                        <option value="bi-paypal" data-icon="bi-paypal">bi-paypal</option>
                                        <option value="bi-pinterest" data-icon="bi-pinterest">bi-pinterest</option>
                                        <option value="bi-signal" data-icon="bi-signal">bi-signal</option>
                                        <option value="bi-snapchat" data-icon="bi-snapchat">bi-snapchat</option>
                                        <option value="bi-spotify" data-icon="bi-spotify">bi-spotify</option>
                                        <option value="bi-stack-overflow" data-icon="bi-stack-overflow">bi-stack-overflow</option>
                                        <option value="bi-strava" data-icon="bi-strava">bi-strava</option>
                                        <option value="bi-wordpress" data-icon="bi-wordpress">bi-wordpress</option>
                                        <option value="bi-vimeo" data-icon="bi-vimeo">bi-vimeo</option>
                                        <option value="bi-activity" data-icon="bi-activity">bi-activity</option>
                                        <option value="bi-easel2-fill" data-icon="bi-easel2-fill">bi-easel2-fill</option>
                                        <option value="bi-easel2" data-icon="bi-easel2">bi-easel2</option>
                                        <option value="bi-easel3-fill" data-icon="bi-easel3-fill">bi-easel3-fill</option>
                                        <option value="bi-easel3" data-icon="bi-easel3">bi-easel3</option>
                                        <option value="bi-fan" data-icon="bi-fan">bi-fan</option>
                                        <option value="bi-fingerprint" data-icon="bi-fingerprint">bi-fingerprint</option>
                                        <option value="bi-graph-down-arrow" data-icon="bi-graph-down-arrow">bi-graph-down-arrow</option>
                                        <option value="bi-graph-up-arrow" data-icon="bi-graph-up-arrow">bi-graph-up-arrow</option>
                                        <option value="bi-hypnotize" data-icon="bi-hypnotize">bi-hypnotize</option>
                                        <option value="bi-magic" data-icon="bi-magic">bi-magic</option>
                                        <option value="bi-person-rolodex" data-icon="bi-person-rolodex">bi-person-rolodex</option>
                                        <option value="bi-person-video" data-icon="bi-person-video">bi-person-video</option>
                                        <option value="bi-person-video2" data-icon="bi-person-video2">bi-person-video2</option>
                                        <option value="bi-person-video3" data-icon="bi-person-video3">bi-person-video3</option>
                                        <option value="bi-person-workspace" data-icon="bi-person-workspace">bi-person-workspace</option>
                                        <option value="bi-radioactive" data-icon="bi-radioactive">bi-radioactive</option>
                                        <option value="bi-webcam-fill" data-icon="bi-webcam-fill">bi-webcam-fill</option>
                                        <option value="bi-webcam" data-icon="bi-webcam">bi-webcam</option>
                                        <option value="bi-yin-yang" data-icon="bi-yin-yang">bi-yin-yang</option>
                                        <option value="bi-bandaid-fill" data-icon="bi-bandaid-fill">bi-bandaid-fill</option>
                                        <option value="bi-bandaid" data-icon="bi-bandaid">bi-bandaid</option>
                                        <option value="bi-bluetooth" data-icon="bi-bluetooth">bi-bluetooth</option>
                                        <option value="bi-body-text" data-icon="bi-body-text">bi-body-text</option>
                                        <option value="bi-boombox" data-icon="bi-boombox">bi-boombox</option>
                                        <option value="bi-boxes" data-icon="bi-boxes">bi-boxes</option>
                                        <option value="bi-dpad-fill" data-icon="bi-dpad-fill">bi-dpad-fill</option>
                                        <option value="bi-dpad" data-icon="bi-dpad">bi-dpad</option>
                                        <option value="bi-ear-fill" data-icon="bi-ear-fill">bi-ear-fill</option>
                                        <option value="bi-ear" data-icon="bi-ear">bi-ear</option>
                                        <option value="bi-envelope-check-fill" data-icon="bi-envelope-check-fill">bi-envelope-check-fill</option>
                                        <option value="bi-envelope-check" data-icon="bi-envelope-check">bi-envelope-check</option>
                                        <option value="bi-envelope-dash-fill" data-icon="bi-envelope-dash-fill">bi-envelope-dash-fill</option>
                                        <option value="bi-envelope-dash" data-icon="bi-envelope-dash">bi-envelope-dash</option>
                                        <option value="bi-envelope-exclamation-fill" data-icon="bi-envelope-exclamation-fill">bi-envelope-exclamation-fill</option>
                                        <option value="bi-envelope-exclamation" data-icon="bi-envelope-exclamation">bi-envelope-exclamation</option>
                                        <option value="bi-envelope-plus-fill" data-icon="bi-envelope-plus-fill">bi-envelope-plus-fill</option>
                                        <option value="bi-envelope-plus" data-icon="bi-envelope-plus">bi-envelope-plus</option>
                                        <option value="bi-envelope-slash-fill" data-icon="bi-envelope-slash-fill">bi-envelope-slash-fill</option>
                                        <option value="bi-envelope-slash" data-icon="bi-envelope-slash">bi-envelope-slash</option>
                                        <option value="bi-envelope-x-fill" data-icon="bi-envelope-x-fill">bi-envelope-x-fill</option>
                                        <option value="bi-envelope-x" data-icon="bi-envelope-x">bi-envelope-x</option>
                                        <option value="bi-explicit-fill" data-icon="bi-explicit-fill">bi-explicit-fill</option>
                                        <option value="bi-explicit" data-icon="bi-explicit">bi-explicit</option>
                                        <option value="bi-git" data-icon="bi-git">bi-git</option>
                                        <option value="bi-infinity" data-icon="bi-infinity">bi-infinity</option>
                                        <option value="bi-list-columns-reverse" data-icon="bi-list-columns-reverse">bi-list-columns-reverse</option>
                                        <option value="bi-list-columns" data-icon="bi-list-columns">bi-list-columns</option>
                                        <option value="bi-meta" data-icon="bi-meta">bi-meta</option>
                                        <option value="bi-nintendo-switch" data-icon="bi-nintendo-switch">bi-nintendo-switch</option>
                                        <option value="bi-pc-display-horizontal" data-icon="bi-pc-display-horizontal">bi-pc-display-horizontal</option>
                                        <option value="bi-pc-display" data-icon="bi-pc-display">bi-pc-display</option>
                                        <option value="bi-pc-horizontal" data-icon="bi-pc-horizontal">bi-pc-horizontal</option>
                                        <option value="bi-pc" data-icon="bi-pc">bi-pc</option>
                                        <option value="bi-playstation" data-icon="bi-playstation">bi-playstation</option>
                                        <option value="bi-plus-slash-minus" data-icon="bi-plus-slash-minus">bi-plus-slash-minus</option>
                                        <option value="bi-projector-fill" data-icon="bi-projector-fill">bi-projector-fill</option>
                                        <option value="bi-projector" data-icon="bi-projector">bi-projector</option>
                                        <option value="bi-qr-code-scan" data-icon="bi-qr-code-scan">bi-qr-code-scan</option>
                                        <option value="bi-qr-code" data-icon="bi-qr-code">bi-qr-code</option>
                                        <option value="bi-quora" data-icon="bi-quora">bi-quora</option>
                                        <option value="bi-quote" data-icon="bi-quote">bi-quote</option>
                                        <option value="bi-robot" data-icon="bi-robot">bi-robot</option>
                                        <option value="bi-send-check-fill" data-icon="bi-send-check-fill">bi-send-check-fill</option>
                                        <option value="bi-send-check" data-icon="bi-send-check">bi-send-check</option>
                                        <option value="bi-send-dash-fill" data-icon="bi-send-dash-fill">bi-send-dash-fill</option>
                                        <option value="bi-send-dash" data-icon="bi-send-dash">bi-send-dash</option>
                                        <option value="bi-send-exclamation-fill" data-icon="bi-send-exclamation-fill">bi-send-exclamation-fill</option>
                                        <option value="bi-send-exclamation" data-icon="bi-send-exclamation">bi-send-exclamation</option>
                                        <option value="bi-send-fill" data-icon="bi-send-fill">bi-send-fill</option>
                                        <option value="bi-send-plus-fill" data-icon="bi-send-plus-fill">bi-send-plus-fill</option>
                                        <option value="bi-send-plus" data-icon="bi-send-plus">bi-send-plus</option>
                                        <option value="bi-send-slash-fill" data-icon="bi-send-slash-fill">bi-send-slash-fill</option>
                                        <option value="bi-send-slash" data-icon="bi-send-slash">bi-send-slash</option>
                                        <option value="bi-send-x-fill" data-icon="bi-send-x-fill">bi-send-x-fill</option>
                                        <option value="bi-send-x" data-icon="bi-send-x">bi-send-x</option>
                                        <option value="bi-send" data-icon="bi-send">bi-send</option>
                                        <option value="bi-steam" data-icon="bi-steam">bi-steam</option>
                                        <option value="bi-terminal-dash" data-icon="bi-terminal-dash">bi-terminal-dash</option>
                                        <option value="bi-terminal-plus" data-icon="bi-terminal-plus">bi-terminal-plus</option>
                                        <option value="bi-terminal-split" data-icon="bi-terminal-split">bi-terminal-split</option>
                                        <option value="bi-ticket-detailed-fill" data-icon="bi-ticket-detailed-fill">bi-ticket-detailed-fill</option>
                                        <option value="bi-ticket-detailed" data-icon="bi-ticket-detailed">bi-ticket-detailed</option>
                                        <option value="bi-ticket-fill" data-icon="bi-ticket-fill">bi-ticket-fill</option>
                                        <option value="bi-ticket-perforated-fill" data-icon="bi-ticket-perforated-fill">bi-ticket-perforated-fill</option>
                                        <option value="bi-ticket-perforated" data-icon="bi-ticket-perforated">bi-ticket-perforated</option>
                                        <option value="bi-ticket" data-icon="bi-ticket">bi-ticket</option>
                                        <option value="bi-tiktok" data-icon="bi-tiktok">bi-tiktok</option>
                                        <option value="bi-window-dash" data-icon="bi-window-dash">bi-window-dash</option>
                                        <option value="bi-window-desktop" data-icon="bi-window-desktop">bi-window-desktop</option>
                                        <option value="bi-window-fullscreen" data-icon="bi-window-fullscreen">bi-window-fullscreen</option>
                                        <option value="bi-window-plus" data-icon="bi-window-plus">bi-window-plus</option>
                                        <option value="bi-window-split" data-icon="bi-window-split">bi-window-split</option>
                                        <option value="bi-window-stack" data-icon="bi-window-stack">bi-window-stack</option>
                                        <option value="bi-window-x" data-icon="bi-window-x">bi-window-x</option>
                                        <option value="bi-xbox" data-icon="bi-xbox">bi-xbox</option>
                                        <option value="bi-ethernet" data-icon="bi-ethernet">bi-ethernet</option>
                                        <option value="bi-hdmi-fill" data-icon="bi-hdmi-fill">bi-hdmi-fill</option>
                                        <option value="bi-hdmi" data-icon="bi-hdmi">bi-hdmi</option>
                                        <option value="bi-usb-c-fill" data-icon="bi-usb-c-fill">bi-usb-c-fill</option>
                                        <option value="bi-usb-c" data-icon="bi-usb-c">bi-usb-c</option>
                                        <option value="bi-usb-fill" data-icon="bi-usb-fill">bi-usb-fill</option>
                                        <option value="bi-usb-plug-fill" data-icon="bi-usb-plug-fill">bi-usb-plug-fill</option>
                                        <option value="bi-usb-plug" data-icon="bi-usb-plug">bi-usb-plug</option>
                                        <option value="bi-usb-symbol" data-icon="bi-usb-symbol">bi-usb-symbol</option>
                                        <option value="bi-usb" data-icon="bi-usb">bi-usb</option>
                                        <option value="bi-boombox-fill" data-icon="bi-boombox-fill">bi-boombox-fill</option>
                                        <option value="bi-displayport" data-icon="bi-displayport">bi-displayport</option>
                                        <option value="bi-gpu-card" data-icon="bi-gpu-card">bi-gpu-card</option>
                                        <option value="bi-memory" data-icon="bi-memory">bi-memory</option>
                                        <option value="bi-modem-fill" data-icon="bi-modem-fill">bi-modem-fill</option>
                                        <option value="bi-modem" data-icon="bi-modem">bi-modem</option>
                                        <option value="bi-motherboard-fill" data-icon="bi-motherboard-fill">bi-motherboard-fill</option>
                                        <option value="bi-motherboard" data-icon="bi-motherboard">bi-motherboard</option>
                                        <option value="bi-optical-audio-fill" data-icon="bi-optical-audio-fill">bi-optical-audio-fill</option>
                                        <option value="bi-optical-audio" data-icon="bi-optical-audio">bi-optical-audio</option>
                                        <option value="bi-pci-card" data-icon="bi-pci-card">bi-pci-card</option>
                                        <option value="bi-router-fill" data-icon="bi-router-fill">bi-router-fill</option>
                                        <option value="bi-router" data-icon="bi-router">bi-router</option>
                                        <option value="bi-thunderbolt-fill" data-icon="bi-thunderbolt-fill">bi-thunderbolt-fill</option>
                                        <option value="bi-thunderbolt" data-icon="bi-thunderbolt">bi-thunderbolt</option>
                                        <option value="bi-usb-drive-fill" data-icon="bi-usb-drive-fill">bi-usb-drive-fill</option>
                                        <option value="bi-usb-drive" data-icon="bi-usb-drive">bi-usb-drive</option>
                                        <option value="bi-usb-micro-fill" data-icon="bi-usb-micro-fill">bi-usb-micro-fill</option>
                                        <option value="bi-usb-micro" data-icon="bi-usb-micro">bi-usb-micro</option>
                                        <option value="bi-usb-mini-fill" data-icon="bi-usb-mini-fill">bi-usb-mini-fill</option>
                                        <option value="bi-usb-mini" data-icon="bi-usb-mini">bi-usb-mini</option>
                                        <option value="bi-cloud-haze2" data-icon="bi-cloud-haze2">bi-cloud-haze2</option>
                                        <option value="bi-device-hdd-fill" data-icon="bi-device-hdd-fill">bi-device-hdd-fill</option>
                                        <option value="bi-device-hdd" data-icon="bi-device-hdd">bi-device-hdd</option>
                                        <option value="bi-device-ssd-fill" data-icon="bi-device-ssd-fill">bi-device-ssd-fill</option>
                                        <option value="bi-device-ssd" data-icon="bi-device-ssd">bi-device-ssd</option>
                                        <option value="bi-displayport-fill" data-icon="bi-displayport-fill">bi-displayport-fill</option>
                                        <option value="bi-mortarboard-fill" data-icon="bi-mortarboard-fill">bi-mortarboard-fill</option>
                                        <option value="bi-mortarboard" data-icon="bi-mortarboard">bi-mortarboard</option>
                                        <option value="bi-terminal-x" data-icon="bi-terminal-x">bi-terminal-x</option>
                                        <option value="bi-arrow-through-heart-fill" data-icon="bi-arrow-through-heart-fill">bi-arrow-through-heart-fill</option>
                                        <option value="bi-arrow-through-heart" data-icon="bi-arrow-through-heart">bi-arrow-through-heart</option>
                                        <option value="bi-badge-sd-fill" data-icon="bi-badge-sd-fill">bi-badge-sd-fill</option>
                                        <option value="bi-badge-sd" data-icon="bi-badge-sd">bi-badge-sd</option>
                                        <option value="bi-bag-heart-fill" data-icon="bi-bag-heart-fill">bi-bag-heart-fill</option>
                                        <option value="bi-bag-heart" data-icon="bi-bag-heart">bi-bag-heart</option>
                                        <option value="bi-balloon-fill" data-icon="bi-balloon-fill">bi-balloon-fill</option>
                                        <option value="bi-balloon-heart-fill" data-icon="bi-balloon-heart-fill">bi-balloon-heart-fill</option>
                                        <option value="bi-balloon-heart" data-icon="bi-balloon-heart">bi-balloon-heart</option>
                                        <option value="bi-balloon" data-icon="bi-balloon">bi-balloon</option>
                                        <option value="bi-box2-fill" data-icon="bi-box2-fill">bi-box2-fill</option>
                                        <option value="bi-box2-heart-fill" data-icon="bi-box2-heart-fill">bi-box2-heart-fill</option>
                                        <option value="bi-box2-heart" data-icon="bi-box2-heart">bi-box2-heart</option>
                                        <option value="bi-box2" data-icon="bi-box2">bi-box2</option>
                                        <option value="bi-braces-asterisk" data-icon="bi-braces-asterisk">bi-braces-asterisk</option>
                                        <option value="bi-calendar-heart-fill" data-icon="bi-calendar-heart-fill">bi-calendar-heart-fill</option>
                                        <option value="bi-calendar-heart" data-icon="bi-calendar-heart">bi-calendar-heart</option>
                                        <option value="bi-calendar2-heart-fill" data-icon="bi-calendar2-heart-fill">bi-calendar2-heart-fill</option>
                                        <option value="bi-calendar2-heart" data-icon="bi-calendar2-heart">bi-calendar2-heart</option>
                                        <option value="bi-chat-heart-fill" data-icon="bi-chat-heart-fill">bi-chat-heart-fill</option>
                                        <option value="bi-chat-heart" data-icon="bi-chat-heart">bi-chat-heart</option>
                                        <option value="bi-chat-left-heart-fill" data-icon="bi-chat-left-heart-fill">bi-chat-left-heart-fill</option>
                                        <option value="bi-chat-left-heart" data-icon="bi-chat-left-heart">bi-chat-left-heart</option>
                                        <option value="bi-chat-right-heart-fill" data-icon="bi-chat-right-heart-fill">bi-chat-right-heart-fill</option>
                                        <option value="bi-chat-right-heart" data-icon="bi-chat-right-heart">bi-chat-right-heart</option>
                                        <option value="bi-chat-square-heart-fill" data-icon="bi-chat-square-heart-fill">bi-chat-square-heart-fill</option>
                                        <option value="bi-chat-square-heart" data-icon="bi-chat-square-heart">bi-chat-square-heart</option>
                                        <option value="bi-clipboard-check-fill" data-icon="bi-clipboard-check-fill">bi-clipboard-check-fill</option>
                                        <option value="bi-clipboard-data-fill" data-icon="bi-clipboard-data-fill">bi-clipboard-data-fill</option>
                                        <option value="bi-clipboard-fill" data-icon="bi-clipboard-fill">bi-clipboard-fill</option>
                                        <option value="bi-clipboard-heart-fill" data-icon="bi-clipboard-heart-fill">bi-clipboard-heart-fill</option>
                                        <option value="bi-clipboard-heart" data-icon="bi-clipboard-heart">bi-clipboard-heart</option>
                                        <option value="bi-clipboard-minus-fill" data-icon="bi-clipboard-minus-fill">bi-clipboard-minus-fill</option>
                                        <option value="bi-clipboard-plus-fill" data-icon="bi-clipboard-plus-fill">bi-clipboard-plus-fill</option>
                                        <option value="bi-clipboard-pulse" data-icon="bi-clipboard-pulse">bi-clipboard-pulse</option>
                                        <option value="bi-clipboard-x-fill" data-icon="bi-clipboard-x-fill">bi-clipboard-x-fill</option>
                                        <option value="bi-clipboard2-check-fill" data-icon="bi-clipboard2-check-fill">bi-clipboard2-check-fill</option>
                                        <option value="bi-clipboard2-check" data-icon="bi-clipboard2-check">bi-clipboard2-check</option>
                                        <option value="bi-clipboard2-data-fill" data-icon="bi-clipboard2-data-fill">bi-clipboard2-data-fill</option>
                                        <option value="bi-clipboard2-data" data-icon="bi-clipboard2-data">bi-clipboard2-data</option>
                                        <option value="bi-clipboard2-fill" data-icon="bi-clipboard2-fill">bi-clipboard2-fill</option>
                                        <option value="bi-clipboard2-heart-fill" data-icon="bi-clipboard2-heart-fill">bi-clipboard2-heart-fill</option>
                                        <option value="bi-clipboard2-heart" data-icon="bi-clipboard2-heart">bi-clipboard2-heart</option>
                                        <option value="bi-clipboard2-minus-fill" data-icon="bi-clipboard2-minus-fill">bi-clipboard2-minus-fill</option>
                                        <option value="bi-clipboard2-minus" data-icon="bi-clipboard2-minus">bi-clipboard2-minus</option>
                                        <option value="bi-clipboard2-plus-fill" data-icon="bi-clipboard2-plus-fill">bi-clipboard2-plus-fill</option>
                                        <option value="bi-clipboard2-plus" data-icon="bi-clipboard2-plus">bi-clipboard2-plus</option>
                                        <option value="bi-clipboard2-pulse-fill" data-icon="bi-clipboard2-pulse-fill">bi-clipboard2-pulse-fill</option>
                                        <option value="bi-clipboard2-pulse" data-icon="bi-clipboard2-pulse">bi-clipboard2-pulse</option>
                                        <option value="bi-clipboard2-x-fill" data-icon="bi-clipboard2-x-fill">bi-clipboard2-x-fill</option>
                                        <option value="bi-clipboard2-x" data-icon="bi-clipboard2-x">bi-clipboard2-x</option>
                                        <option value="bi-clipboard2" data-icon="bi-clipboard2">bi-clipboard2</option>
                                        <option value="bi-emoji-kiss-fill" data-icon="bi-emoji-kiss-fill">bi-emoji-kiss-fill</option>
                                        <option value="bi-emoji-kiss" data-icon="bi-emoji-kiss">bi-emoji-kiss</option>
                                        <option value="bi-envelope-heart-fill" data-icon="bi-envelope-heart-fill">bi-envelope-heart-fill</option>
                                        <option value="bi-envelope-heart" data-icon="bi-envelope-heart">bi-envelope-heart</option>
                                        <option value="bi-envelope-open-heart-fill" data-icon="bi-envelope-open-heart-fill">bi-envelope-open-heart-fill</option>
                                        <option value="bi-envelope-open-heart" data-icon="bi-envelope-open-heart">bi-envelope-open-heart</option>
                                        <option value="bi-envelope-paper-fill" data-icon="bi-envelope-paper-fill">bi-envelope-paper-fill</option>
                                        <option value="bi-envelope-paper-heart-fill" data-icon="bi-envelope-paper-heart-fill">bi-envelope-paper-heart-fill</option>
                                        <option value="bi-envelope-paper-heart" data-icon="bi-envelope-paper-heart">bi-envelope-paper-heart</option>
                                        <option value="bi-envelope-paper" data-icon="bi-envelope-paper">bi-envelope-paper</option>
                                        <option value="bi-filetype-aac" data-icon="bi-filetype-aac">bi-filetype-aac</option>
                                        <option value="bi-filetype-ai" data-icon="bi-filetype-ai">bi-filetype-ai</option>
                                        <option value="bi-filetype-bmp" data-icon="bi-filetype-bmp">bi-filetype-bmp</option>
                                        <option value="bi-filetype-cs" data-icon="bi-filetype-cs">bi-filetype-cs</option>
                                        <option value="bi-filetype-css" data-icon="bi-filetype-css">bi-filetype-css</option>
                                        <option value="bi-filetype-csv" data-icon="bi-filetype-csv">bi-filetype-csv</option>
                                        <option value="bi-filetype-doc" data-icon="bi-filetype-doc">bi-filetype-doc</option>
                                        <option value="bi-filetype-docx" data-icon="bi-filetype-docx">bi-filetype-docx</option>
                                        <option value="bi-filetype-exe" data-icon="bi-filetype-exe">bi-filetype-exe</option>
                                        <option value="bi-filetype-gif" data-icon="bi-filetype-gif">bi-filetype-gif</option>
                                        <option value="bi-filetype-heic" data-icon="bi-filetype-heic">bi-filetype-heic</option>
                                        <option value="bi-filetype-html" data-icon="bi-filetype-html">bi-filetype-html</option>
                                        <option value="bi-filetype-java" data-icon="bi-filetype-java">bi-filetype-java</option>
                                        <option value="bi-filetype-jpg" data-icon="bi-filetype-jpg">bi-filetype-jpg</option>
                                        <option value="bi-filetype-js" data-icon="bi-filetype-js">bi-filetype-js</option>
                                        <option value="bi-filetype-jsx" data-icon="bi-filetype-jsx">bi-filetype-jsx</option>
                                        <option value="bi-filetype-key" data-icon="bi-filetype-key">bi-filetype-key</option>
                                        <option value="bi-filetype-m4p" data-icon="bi-filetype-m4p">bi-filetype-m4p</option>
                                        <option value="bi-filetype-md" data-icon="bi-filetype-md">bi-filetype-md</option>
                                        <option value="bi-filetype-mdx" data-icon="bi-filetype-mdx">bi-filetype-mdx</option>
                                        <option value="bi-filetype-mov" data-icon="bi-filetype-mov">bi-filetype-mov</option>
                                        <option value="bi-filetype-mp3" data-icon="bi-filetype-mp3">bi-filetype-mp3</option>
                                        <option value="bi-filetype-mp4" data-icon="bi-filetype-mp4">bi-filetype-mp4</option>
                                        <option value="bi-filetype-otf" data-icon="bi-filetype-otf">bi-filetype-otf</option>
                                        <option value="bi-filetype-pdf" data-icon="bi-filetype-pdf">bi-filetype-pdf</option>
                                        <option value="bi-filetype-php" data-icon="bi-filetype-php">bi-filetype-php</option>
                                        <option value="bi-filetype-png" data-icon="bi-filetype-png">bi-filetype-png</option>
                                        <option value="bi-filetype-ppt" data-icon="bi-filetype-ppt">bi-filetype-ppt</option>
                                        <option value="bi-filetype-psd" data-icon="bi-filetype-psd">bi-filetype-psd</option>
                                        <option value="bi-filetype-py" data-icon="bi-filetype-py">bi-filetype-py</option>
                                        <option value="bi-filetype-raw" data-icon="bi-filetype-raw">bi-filetype-raw</option>
                                        <option value="bi-filetype-rb" data-icon="bi-filetype-rb">bi-filetype-rb</option>
                                        <option value="bi-filetype-sass" data-icon="bi-filetype-sass">bi-filetype-sass</option>
                                        <option value="bi-filetype-scss" data-icon="bi-filetype-scss">bi-filetype-scss</option>
                                        <option value="bi-filetype-sh" data-icon="bi-filetype-sh">bi-filetype-sh</option>
                                        <option value="bi-filetype-svg" data-icon="bi-filetype-svg">bi-filetype-svg</option>
                                        <option value="bi-filetype-tiff" data-icon="bi-filetype-tiff">bi-filetype-tiff</option>
                                        <option value="bi-filetype-tsx" data-icon="bi-filetype-tsx">bi-filetype-tsx</option>
                                        <option value="bi-filetype-ttf" data-icon="bi-filetype-ttf">bi-filetype-ttf</option>
                                        <option value="bi-filetype-txt" data-icon="bi-filetype-txt">bi-filetype-txt</option>
                                        <option value="bi-filetype-wav" data-icon="bi-filetype-wav">bi-filetype-wav</option>
                                        <option value="bi-filetype-woff" data-icon="bi-filetype-woff">bi-filetype-woff</option>
                                        <option value="bi-filetype-xls" data-icon="bi-filetype-xls">bi-filetype-xls</option>
                                        <option value="bi-filetype-xml" data-icon="bi-filetype-xml">bi-filetype-xml</option>
                                        <option value="bi-filetype-yml" data-icon="bi-filetype-yml">bi-filetype-yml</option>
                                        <option value="bi-heart-arrow" data-icon="bi-heart-arrow">bi-heart-arrow</option>
                                        <option value="bi-heart-pulse-fill" data-icon="bi-heart-pulse-fill">bi-heart-pulse-fill</option>
                                        <option value="bi-heart-pulse" data-icon="bi-heart-pulse">bi-heart-pulse</option>
                                        <option value="bi-heartbreak-fill" data-icon="bi-heartbreak-fill">bi-heartbreak-fill</option>
                                        <option value="bi-heartbreak" data-icon="bi-heartbreak">bi-heartbreak</option>
                                        <option value="bi-hearts" data-icon="bi-hearts">bi-hearts</option>
                                        <option value="bi-hospital-fill" data-icon="bi-hospital-fill">bi-hospital-fill</option>
                                        <option value="bi-hospital" data-icon="bi-hospital">bi-hospital</option>
                                        <option value="bi-house-heart-fill" data-icon="bi-house-heart-fill">bi-house-heart-fill</option>
                                        <option value="bi-house-heart" data-icon="bi-house-heart">bi-house-heart</option>
                                        <option value="bi-incognito" data-icon="bi-incognito">bi-incognito</option>
                                        <option value="bi-magnet-fill" data-icon="bi-magnet-fill">bi-magnet-fill</option>
                                        <option value="bi-magnet" data-icon="bi-magnet">bi-magnet</option>
                                        <option value="bi-person-heart" data-icon="bi-person-heart">bi-person-heart</option>
                                        <option value="bi-person-hearts" data-icon="bi-person-hearts">bi-person-hearts</option>
                                        <option value="bi-phone-flip" data-icon="bi-phone-flip">bi-phone-flip</option>
                                        <option value="bi-plugin" data-icon="bi-plugin">bi-plugin</option>
                                        <option value="bi-postage-fill" data-icon="bi-postage-fill">bi-postage-fill</option>
                                        <option value="bi-postage-heart-fill" data-icon="bi-postage-heart-fill">bi-postage-heart-fill</option>
                                        <option value="bi-postage-heart" data-icon="bi-postage-heart">bi-postage-heart</option>
                                        <option value="bi-postage" data-icon="bi-postage">bi-postage</option>
                                        <option value="bi-postcard-fill" data-icon="bi-postcard-fill">bi-postcard-fill</option>
                                        <option value="bi-postcard-heart-fill" data-icon="bi-postcard-heart-fill">bi-postcard-heart-fill</option>
                                        <option value="bi-postcard-heart" data-icon="bi-postcard-heart">bi-postcard-heart</option>
                                        <option value="bi-postcard" data-icon="bi-postcard">bi-postcard</option>
                                        <option value="bi-search-heart-fill" data-icon="bi-search-heart-fill">bi-search-heart-fill</option>
                                        <option value="bi-search-heart" data-icon="bi-search-heart">bi-search-heart</option>
                                        <option value="bi-sliders2-vertical" data-icon="bi-sliders2-vertical">bi-sliders2-vertical</option>
                                        <option value="bi-sliders2" data-icon="bi-sliders2">bi-sliders2</option>
                                        <option value="bi-trash3-fill" data-icon="bi-trash3-fill">bi-trash3-fill</option>
                                        <option value="bi-trash3" data-icon="bi-trash3">bi-trash3</option>
                                        <option value="bi-valentine" data-icon="bi-valentine">bi-valentine</option>
                                        <option value="bi-valentine2" data-icon="bi-valentine2">bi-valentine2</option>
                                        <option value="bi-wrench-adjustable-circle-fill" data-icon="bi-wrench-adjustable-circle-fill">bi-wrench-adjustable-circle-filoption>li>
                                        <option value="bi-wrench-adjustable-circle" data-icon="bi-wrench-adjustable-circle">bi-wrench-adjustable-circle</option>
                                        <option value="bi-wrench-adjustable" data-icon="bi-wrench-adjustable">bi-wrench-adjustable</option>
                                        <option value="bi-filetype-json" data-icon="bi-filetype-json">bi-filetype-json</option>
                                        <option value="bi-filetype-pptx" data-icon="bi-filetype-pptx">bi-filetype-pptx</option>
                                        <option value="bi-filetype-xlsx" data-icon="bi-filetype-xlsx">bi-filetype-xlsx</option>
                                        <option value="bi-1-circle-fill" data-icon="bi-1-circle-fill">bi-1-circle-fill</option>
                                        <option value="bi-1-circle" data-icon="bi-1-circle">bi-1-circle</option>
                                        <option value="bi-1-square-fill" data-icon="bi-1-square-fill">bi-1-square-fill</option>
                                        <option value="bi-1-square" data-icon="bi-1-square">bi-1-square</option>
                                        <option value="bi-2-circle-fill" data-icon="bi-2-circle-fill">bi-2-circle-fill</option>
                                        <option value="bi-2-circle" data-icon="bi-2-circle">bi-2-circle</option>
                                        <option value="bi-2-square-fill" data-icon="bi-2-square-fill">bi-2-square-fill</option>
                                        <option value="bi-2-square" data-icon="bi-2-square">bi-2-square</option>
                                        <option value="bi-3-circle-fill" data-icon="bi-3-circle-fill">bi-3-circle-fill</option>
                                        <option value="bi-3-circle" data-icon="bi-3-circle">bi-3-circle</option>
                                        <option value="bi-3-square-fill" data-icon="bi-3-square-fill">bi-3-square-fill</option>
                                        <option value="bi-3-square" data-icon="bi-3-square">bi-3-square</option>
                                        <option value="bi-4-circle-fill" data-icon="bi-4-circle-fill">bi-4-circle-fill</option>
                                        <option value="bi-4-circle" data-icon="bi-4-circle">bi-4-circle</option>
                                        <option value="bi-4-square-fill" data-icon="bi-4-square-fill">bi-4-square-fill</option>
                                        <option value="bi-4-square" data-icon="bi-4-square">bi-4-square</option>
                                        <option value="bi-5-circle-fill" data-icon="bi-5-circle-fill">bi-5-circle-fill</option>
                                        <option value="bi-5-circle" data-icon="bi-5-circle">bi-5-circle</option>
                                        <option value="bi-5-square-fill" data-icon="bi-5-square-fill">bi-5-square-fill</option>
                                        <option value="bi-5-square" data-icon="bi-5-square">bi-5-square</option>
                                        <option value="bi-6-circle-fill" data-icon="bi-6-circle-fill">bi-6-circle-fill</option>
                                        <option value="bi-6-circle" data-icon="bi-6-circle">bi-6-circle</option>
                                        <option value="bi-6-square-fill" data-icon="bi-6-square-fill">bi-6-square-fill</option>
                                        <option value="bi-6-square" data-icon="bi-6-square">bi-6-square</option>
                                        <option value="bi-7-circle-fill" data-icon="bi-7-circle-fill">bi-7-circle-fill</option>
                                        <option value="bi-7-circle" data-icon="bi-7-circle">bi-7-circle</option>
                                        <option value="bi-7-square-fill" data-icon="bi-7-square-fill">bi-7-square-fill</option>
                                        <option value="bi-7-square" data-icon="bi-7-square">bi-7-square</option>
                                        <option value="bi-8-circle-fill" data-icon="bi-8-circle-fill">bi-8-circle-fill</option>
                                        <option value="bi-8-circle" data-icon="bi-8-circle">bi-8-circle</option>
                                        <option value="bi-8-square-fill" data-icon="bi-8-square-fill">bi-8-square-fill</option>
                                        <option value="bi-8-square" data-icon="bi-8-square">bi-8-square</option>
                                        <option value="bi-9-circle-fill" data-icon="bi-9-circle-fill">bi-9-circle-fill</option>
                                        <option value="bi-9-circle" data-icon="bi-9-circle">bi-9-circle</option>
                                        <option value="bi-9-square-fill" data-icon="bi-9-square-fill">bi-9-square-fill</option>
                                        <option value="bi-9-square" data-icon="bi-9-square">bi-9-square</option>
                                        <option value="bi-airplane-engines-fill" data-icon="bi-airplane-engines-fill">bi-airplane-engines-fill</option>
                                        <option value="bi-airplane-engines" data-icon="bi-airplane-engines">bi-airplane-engines</option>
                                        <option value="bi-airplane-fill" data-icon="bi-airplane-fill">bi-airplane-fill</option>
                                        <option value="bi-airplane" data-icon="bi-airplane">bi-airplane</option>
                                        <option value="bi-alexa" data-icon="bi-alexa">bi-alexa</option>
                                        <option value="bi-alipay" data-icon="bi-alipay">bi-alipay</option>
                                        <option value="bi-android" data-icon="bi-android">bi-android</option>
                                        <option value="bi-android2" data-icon="bi-android2">bi-android2</option>
                                        <option value="bi-box-fill" data-icon="bi-box-fill">bi-box-fill</option>
                                        <option value="bi-box-seam-fill" data-icon="bi-box-seam-fill">bi-box-seam-fill</option>
                                        <option value="bi-browser-chrome" data-icon="bi-browser-chrome">bi-browser-chrome</option>
                                        <option value="bi-browser-edge" data-icon="bi-browser-edge">bi-browser-edge</option>
                                        <option value="bi-browser-firefox" data-icon="bi-browser-firefox">bi-browser-firefox</option>
                                        <option value="bi-browser-safari" data-icon="bi-browser-safari">bi-browser-safari</option>
                                        <option value="bi-c-circle-fill" data-icon="bi-c-circle-fill">bi-c-circle-fill</option>
                                        <option value="bi-c-circle" data-icon="bi-c-circle">bi-c-circle</option>
                                        <option value="bi-c-square-fill" data-icon="bi-c-square-fill">bi-c-square-fill</option>
                                        <option value="bi-c-square" data-icon="bi-c-square">bi-c-square</option>
                                        <option value="bi-capsule-pill" data-icon="bi-capsule-pill">bi-capsule-pill</option>
                                        <option value="bi-capsule" data-icon="bi-capsule">bi-capsule</option>
                                        <option value="bi-car-front-fill" data-icon="bi-car-front-fill">bi-car-front-fill</option>
                                        <option value="bi-car-front" data-icon="bi-car-front">bi-car-front</option>
                                        <option value="bi-cassette-fill" data-icon="bi-cassette-fill">bi-cassette-fill</option>
                                        <option value="bi-cassette" data-icon="bi-cassette">bi-cassette</option>
                                        <option value="bi-cc-circle-fill" data-icon="bi-cc-circle-fill">bi-cc-circle-fill</option>
                                        <option value="bi-cc-circle" data-icon="bi-cc-circle">bi-cc-circle</option>
                                        <option value="bi-cc-square-fill" data-icon="bi-cc-square-fill">bi-cc-square-fill</option>
                                        <option value="bi-cc-square" data-icon="bi-cc-square">bi-cc-square</option>
                                        <option value="bi-cup-hot-fill" data-icon="bi-cup-hot-fill">bi-cup-hot-fill</option>
                                        <option value="bi-cup-hot" data-icon="bi-cup-hot">bi-cup-hot</option>
                                        <option value="bi-currency-rupee" data-icon="bi-currency-rupee">bi-currency-rupee</option>
                                        <option value="bi-dropbox" data-icon="bi-dropbox">bi-dropbox</option>
                                        <option value="bi-escape" data-icon="bi-escape">bi-escape</option>
                                        <option value="bi-fast-forward-btn-fill" data-icon="bi-fast-forward-btn-fill">bi-fast-forward-btn-fill</option>
                                        <option value="bi-fast-forward-btn" data-icon="bi-fast-forward-btn">bi-fast-forward-btn</option>
                                        <option value="bi-fast-forward-circle-fill" data-icon="bi-fast-forward-circle-fill">bi-fast-forward-circle-fill</option>
                                        <option value="bi-fast-forward-circle" data-icon="bi-fast-forward-circle">bi-fast-forward-circle</option>
                                        <option value="bi-fast-forward-fill" data-icon="bi-fast-forward-fill">bi-fast-forward-fill</option>
                                        <option value="bi-fast-forward" data-icon="bi-fast-forward">bi-fast-forward</option>
                                        <option value="bi-filetype-sql" data-icon="bi-filetype-sql">bi-filetype-sql</option>
                                        <option value="bi-fire" data-icon="bi-fire">bi-fire</option>
                                        <option value="bi-google-play" data-icon="bi-google-play">bi-google-play</option>
                                        <option value="bi-h-circle-fill" data-icon="bi-h-circle-fill">bi-h-circle-fill</option>
                                        <option value="bi-h-circle" data-icon="bi-h-circle">bi-h-circle</option>
                                        <option value="bi-h-square-fill" data-icon="bi-h-square-fill">bi-h-square-fill</option>
                                        <option value="bi-h-square" data-icon="bi-h-square">bi-h-square</option>
                                        <option value="bi-indent" data-icon="bi-indent">bi-indent</option>
                                        <option value="bi-lungs-fill" data-icon="bi-lungs-fill">bi-lungs-fill</option>
                                        <option value="bi-lungs" data-icon="bi-lungs">bi-lungs</option>
                                        <option value="bi-microsoft-teams" data-icon="bi-microsoft-teams">bi-microsoft-teams</option>
                                        <option value="bi-p-circle-fill" data-icon="bi-p-circle-fill">bi-p-circle-fill</option>
                                        <option value="bi-p-circle" data-icon="bi-p-circle">bi-p-circle</option>
                                        <option value="bi-p-square-fill" data-icon="bi-p-square-fill">bi-p-square-fill</option>
                                        <option value="bi-p-square" data-icon="bi-p-square">bi-p-square</option>
                                        <option value="bi-pass-fill" data-icon="bi-pass-fill">bi-pass-fill</option>
                                        <option value="bi-pass" data-icon="bi-pass">bi-pass</option>
                                        <option value="bi-prescription" data-icon="bi-prescription">bi-prescription</option>
                                        <option value="bi-prescription2" data-icon="bi-prescription2">bi-prescription2</option>
                                        <option value="bi-r-circle-fill" data-icon="bi-r-circle-fill">bi-r-circle-fill</option>
                                        <option value="bi-r-circle" data-icon="bi-r-circle">bi-r-circle</option>
                                        <option value="bi-r-square-fill" data-icon="bi-r-square-fill">bi-r-square-fill</option>
                                        <option value="bi-r-square" data-icon="bi-r-square">bi-r-square</option>
                                        <option value="bi-repeat-1" data-icon="bi-repeat-1">bi-repeat-1</option>
                                        <option value="bi-repeat" data-icon="bi-repeat">bi-repeat</option>
                                        <option value="bi-rewind-btn-fill" data-icon="bi-rewind-btn-fill">bi-rewind-btn-fill</option>
                                        <option value="bi-rewind-btn" data-icon="bi-rewind-btn">bi-rewind-btn</option>
                                        <option value="bi-rewind-circle-fill" data-icon="bi-rewind-circle-fill">bi-rewind-circle-fill</option>
                                        <option value="bi-rewind-circle" data-icon="bi-rewind-circle">bi-rewind-circle</option>
                                        <option value="bi-rewind-fill" data-icon="bi-rewind-fill">bi-rewind-fill</option>
                                        <option value="bi-rewind" data-icon="bi-rewind">bi-rewind</option>
                                        <option value="bi-train-freight-front-fill" data-icon="bi-train-freight-front-fill">bi-train-freight-front-fill</option>
                                        <option value="bi-train-freight-front" data-icon="bi-train-freight-front">bi-train-freight-front</option>
                                        <option value="bi-train-front-fill" data-icon="bi-train-front-fill">bi-train-front-fill</option>
                                        <option value="bi-train-front" data-icon="bi-train-front">bi-train-front</option>
                                        <option value="bi-train-lightrail-front-fill" data-icon="bi-train-lightrail-front-fill">bi-train-lightrail-front-fill</option>
                                        <option value="bi-train-lightrail-front" data-icon="bi-train-lightrail-front">bi-train-lightrail-front</option>
                                        <option value="bi-truck-front-fill" data-icon="bi-truck-front-fill">bi-truck-front-fill</option>
                                        <option value="bi-truck-front" data-icon="bi-truck-front">bi-truck-front</option>
                                        <option value="bi-ubuntu" data-icon="bi-ubuntu">bi-ubuntu</option>
                                        <option value="bi-unindent" data-icon="bi-unindent">bi-unindent</option>
                                        <option value="bi-unity" data-icon="bi-unity">bi-unity</option>
                                        <option value="bi-universal-access-circle" data-icon="bi-universal-access-circle">bi-universal-access-circle</option>
                                        <option value="bi-universal-access" data-icon="bi-universal-access">bi-universal-access</option>
                                        <option value="bi-virus" data-icon="bi-virus">bi-virus</option>
                                        <option value="bi-virus2" data-icon="bi-virus2">bi-virus2</option>
                                        <option value="bi-wechat" data-icon="bi-wechat">bi-wechat</option>
                                        <option value="bi-yelp" data-icon="bi-yelp">bi-yelp</option>
                                        <option value="bi-sign-stop-fill" data-icon="bi-sign-stop-fill">bi-sign-stop-fill</option>
                                        <option value="bi-sign-stop-lights-fill" data-icon="bi-sign-stop-lights-fill">bi-sign-stop-lights-fill</option>
                                        <option value="bi-sign-stop-lights" data-icon="bi-sign-stop-lights">bi-sign-stop-lights</option>
                                        <option value="bi-sign-stop" data-icon="bi-sign-stop">bi-sign-stop</option>
                                        <option value="bi-sign-turn-left-fill" data-icon="bi-sign-turn-left-fill">bi-sign-turn-left-fill</option>
                                        <option value="bi-sign-turn-left" data-icon="bi-sign-turn-left">bi-sign-turn-left</option>
                                        <option value="bi-sign-turn-right-fill" data-icon="bi-sign-turn-right-fill">bi-sign-turn-right-fill</option>
                                        <option value="bi-sign-turn-right" data-icon="bi-sign-turn-right">bi-sign-turn-right</option>
                                        <option value="bi-sign-turn-slight-left-fill" data-icon="bi-sign-turn-slight-left-fill">bi-sign-turn-slight-left-fill</option>
                                        <option value="bi-sign-turn-slight-left" data-icon="bi-sign-turn-slight-left">bi-sign-turn-slight-left</option>
                                        <option value="bi-sign-turn-slight-right-fill" data-icon="bi-sign-turn-slight-right-fill">bi-sign-turn-slight-right-fill</option>
                                        <option value="bi-sign-turn-slight-right" data-icon="bi-sign-turn-slight-right">bi-sign-turn-slight-right</option>
                                        <option value="bi-sign-yield-fill" data-icon="bi-sign-yield-fill">bi-sign-yield-fill</option>
                                        <option value="bi-sign-yield" data-icon="bi-sign-yield">bi-sign-yield</option>
                                        <option value="bi-ev-station-fill" data-icon="bi-ev-station-fill">bi-ev-station-fill</option>
                                        <option value="bi-ev-station" data-icon="bi-ev-station">bi-ev-station</option>
                                        <option value="bi-fuel-pump-diesel-fill" data-icon="bi-fuel-pump-diesel-fill">bi-fuel-pump-diesel-fill</option>
                                        <option value="bi-fuel-pump-diesel" data-icon="bi-fuel-pump-diesel">bi-fuel-pump-diesel</option>
                                        <option value="bi-fuel-pump-fill" data-icon="bi-fuel-pump-fill">bi-fuel-pump-fill</option>
                                        <option value="bi-fuel-pump" data-icon="bi-fuel-pump">bi-fuel-pump</option>
                                        <option value="bi-0-circle-fill" data-icon="bi-0-circle-fill">bi-0-circle-fill</option>
                                        <option value="bi-0-circle" data-icon="bi-0-circle">bi-0-circle</option>
                                        <option value="bi-0-square-fill" data-icon="bi-0-square-fill">bi-0-square-fill</option>
                                        <option value="bi-0-square" data-icon="bi-0-square">bi-0-square</option>
                                        <option value="bi-rocket-fill" data-icon="bi-rocket-fill">bi-rocket-fill</option>
                                        <option value="bi-rocket-takeoff-fill" data-icon="bi-rocket-takeoff-fill">bi-rocket-takeoff-fill</option>
                                        <option value="bi-rocket-takeoff" data-icon="bi-rocket-takeoff">bi-rocket-takeoff</option>
                                        <option value="bi-rocket" data-icon="bi-rocket">bi-rocket</option>
                                        <option value="bi-stripe" data-icon="bi-stripe">bi-stripe</option>
                                        <option value="bi-subscript" data-icon="bi-subscript">bi-subscript</option>
                                        <option value="bi-superscript" data-icon="bi-superscript">bi-superscript</option>
                                        <option value="bi-trello" data-icon="bi-trello">bi-trello</option>
                                        <option value="bi-envelope-at-fill" data-icon="bi-envelope-at-fill">bi-envelope-at-fill</option>
                                        <option value="bi-envelope-at" data-icon="bi-envelope-at">bi-envelope-at</option>
                                        <option value="bi-regex" data-icon="bi-regex">bi-regex</option>
                                        <option value="bi-text-wrap" data-icon="bi-text-wrap">bi-text-wrap</option>
                                        <option value="bi-sign-dead-end-fill" data-icon="bi-sign-dead-end-fill">bi-sign-dead-end-fill</option>
                                        <option value="bi-sign-dead-end" data-icon="bi-sign-dead-end">bi-sign-dead-end</option>
                                        <option value="bi-sign-do-not-enter-fill" data-icon="bi-sign-do-not-enter-fill">bi-sign-do-not-enter-fill</option>
                                        <option value="bi-sign-do-not-enter" data-icon="bi-sign-do-not-enter">bi-sign-do-not-enter</option>
                                        <option value="bi-sign-intersection-fill" data-icon="bi-sign-intersection-fill">bi-sign-intersection-fill</option>
                                        <option value="bi-sign-intersection-side-fill" data-icon="bi-sign-intersection-side-fill">bi-sign-intersection-side-fill</option>
                                        <option value="bi-sign-intersection-side" data-icon="bi-sign-intersection-side">bi-sign-intersection-side</option>
                                        <option value="bi-sign-intersection-t-fill" data-icon="bi-sign-intersection-t-fill">bi-sign-intersection-t-fill</option>
                                        <option value="bi-sign-intersection-t" data-icon="bi-sign-intersection-t">bi-sign-intersection-t</option>
                                        <option value="bi-sign-intersection-y-fill" data-icon="bi-sign-intersection-y-fill">bi-sign-intersection-y-fill</option>
                                        <option value="bi-sign-intersection-y" data-icon="bi-sign-intersection-y">bi-sign-intersection-y</option>
                                        <option value="bi-sign-intersection" data-icon="bi-sign-intersection">bi-sign-intersection</option>
                                        <option value="bi-sign-merge-left-fill" data-icon="bi-sign-merge-left-fill">bi-sign-merge-left-fill</option>
                                        <option value="bi-sign-merge-left" data-icon="bi-sign-merge-left">bi-sign-merge-left</option>
                                        <option value="bi-sign-merge-right-fill" data-icon="bi-sign-merge-right-fill">bi-sign-merge-right-fill</option>
                                        <option value="bi-sign-merge-right" data-icon="bi-sign-merge-right">bi-sign-merge-right</option>
                                        <option value="bi-sign-no-left-turn-fill" data-icon="bi-sign-no-left-turn-fill">bi-sign-no-left-turn-fill</option>
                                        <option value="bi-sign-no-left-turn" data-icon="bi-sign-no-left-turn">bi-sign-no-left-turn</option>
                                        <option value="bi-sign-no-parking-fill" data-icon="bi-sign-no-parking-fill">bi-sign-no-parking-fill</option>
                                        <option value="bi-sign-no-parking" data-icon="bi-sign-no-parking">bi-sign-no-parking</option>
                                        <option value="bi-sign-no-right-turn-fill" data-icon="bi-sign-no-right-turn-fill">bi-sign-no-right-turn-fill</option>
                                        <option value="bi-sign-no-right-turn" data-icon="bi-sign-no-right-turn">bi-sign-no-right-turn</option>
                                        <option value="bi-sign-railroad-fill" data-icon="bi-sign-railroad-fill">bi-sign-railroad-fill</option>
                                        <option value="bi-sign-railroad" data-icon="bi-sign-railroad">bi-sign-railroad</option>
                                        <option value="bi-building-add" data-icon="bi-building-add">bi-building-add</option>
                                        <option value="bi-building-check" data-icon="bi-building-check">bi-building-check</option>
                                        <option value="bi-building-dash" data-icon="bi-building-dash">bi-building-dash</option>
                                        <option value="bi-building-down" data-icon="bi-building-down">bi-building-down</option>
                                        <option value="bi-building-exclamation" data-icon="bi-building-exclamation">bi-building-exclamation</option>
                                        <option value="bi-building-fill-add" data-icon="bi-building-fill-add">bi-building-fill-add</option>
                                        <option value="bi-building-fill-check" data-icon="bi-building-fill-check">bi-building-fill-check</option>
                                        <option value="bi-building-fill-dash" data-icon="bi-building-fill-dash">bi-building-fill-dash</option>
                                        <option value="bi-building-fill-down" data-icon="bi-building-fill-down">bi-building-fill-down</option>
                                        <option value="bi-building-fill-exclamation" data-icon="bi-building-fill-exclamation">bi-building-fill-exclamation</option>
                                        <option value="bi-building-fill-gear" data-icon="bi-building-fill-gear">bi-building-fill-gear</option>
                                        <option value="bi-building-fill-lock" data-icon="bi-building-fill-lock">bi-building-fill-lock</option>
                                        <option value="bi-building-fill-slash" data-icon="bi-building-fill-slash">bi-building-fill-slash</option>
                                        <option value="bi-building-fill-up" data-icon="bi-building-fill-up">bi-building-fill-up</option>
                                        <option value="bi-building-fill-x" data-icon="bi-building-fill-x">bi-building-fill-x</option>
                                        <option value="bi-building-fill" data-icon="bi-building-fill">bi-building-fill</option>
                                        <option value="bi-building-gear" data-icon="bi-building-gear">bi-building-gear</option>
                                        <option value="bi-building-lock" data-icon="bi-building-lock">bi-building-lock</option>
                                        <option value="bi-building-slash" data-icon="bi-building-slash">bi-building-slash</option>
                                        <option value="bi-building-up" data-icon="bi-building-up">bi-building-up</option>
                                        <option value="bi-building-x" data-icon="bi-building-x">bi-building-x</option>
                                        <option value="bi-buildings-fill" data-icon="bi-buildings-fill">bi-buildings-fill</option>
                                        <option value="bi-buildings" data-icon="bi-buildings">bi-buildings</option>
                                        <option value="bi-bus-front-fill" data-icon="bi-bus-front-fill">bi-bus-front-fill</option>
                                        <option value="bi-bus-front" data-icon="bi-bus-front">bi-bus-front</option>
                                        <option value="bi-ev-front-fill" data-icon="bi-ev-front-fill">bi-ev-front-fill</option>
                                        <option value="bi-ev-front" data-icon="bi-ev-front">bi-ev-front</option>
                                        <option value="bi-globe-americas" data-icon="bi-globe-americas">bi-globe-americas</option>
                                        <option value="bi-globe-asia-australia" data-icon="bi-globe-asia-australia">bi-globe-asia-australia</option>
                                        <option value="bi-globe-central-south-asia" data-icon="bi-globe-central-south-asia">bi-globe-central-south-asia</option>
                                        <option value="bi-globe-europe-africa" data-icon="bi-globe-europe-africa">bi-globe-europe-africa</option>
                                        <option value="bi-house-add-fill" data-icon="bi-house-add-fill">bi-house-add-fill</option>
                                        <option value="bi-house-add" data-icon="bi-house-add">bi-house-add</option>
                                        <option value="bi-house-check-fill" data-icon="bi-house-check-fill">bi-house-check-fill</option>
                                        <option value="bi-house-check" data-icon="bi-house-check">bi-house-check</option>
                                        <option value="bi-house-dash-fill" data-icon="bi-house-dash-fill">bi-house-dash-fill</option>
                                        <option value="bi-house-dash" data-icon="bi-house-dash">bi-house-dash</option>
                                        <option value="bi-house-down-fill" data-icon="bi-house-down-fill">bi-house-down-fill</option>
                                        <option value="bi-house-down" data-icon="bi-house-down">bi-house-down</option>
                                        <option value="bi-house-exclamation-fill" data-icon="bi-house-exclamation-fill">bi-house-exclamation-fill</option>
                                        <option value="bi-house-exclamation" data-icon="bi-house-exclamation">bi-house-exclamation</option>
                                        <option value="bi-house-gear-fill" data-icon="bi-house-gear-fill">bi-house-gear-fill</option>
                                        <option value="bi-house-gear" data-icon="bi-house-gear">bi-house-gear</option>
                                        <option value="bi-house-lock-fill" data-icon="bi-house-lock-fill">bi-house-lock-fill</option>
                                        <option value="bi-house-lock" data-icon="bi-house-lock">bi-house-lock</option>
                                        <option value="bi-house-slash-fill" data-icon="bi-house-slash-fill">bi-house-slash-fill</option>
                                        <option value="bi-house-slash" data-icon="bi-house-slash">bi-house-slash</option>
                                        <option value="bi-house-up-fill" data-icon="bi-house-up-fill">bi-house-up-fill</option>
                                        <option value="bi-house-up" data-icon="bi-house-up">bi-house-up</option>
                                        <option value="bi-house-x-fill" data-icon="bi-house-x-fill">bi-house-x-fill</option>
                                        <option value="bi-house-x" data-icon="bi-house-x">bi-house-x</option>
                                        <option value="bi-person-add" data-icon="bi-person-add">bi-person-add</option>
                                        <option value="bi-person-down" data-icon="bi-person-down">bi-person-down</option>
                                        <option value="bi-person-exclamation" data-icon="bi-person-exclamation">bi-person-exclamation</option>
                                        <option value="bi-person-fill-add" data-icon="bi-person-fill-add">bi-person-fill-add</option>
                                        <option value="bi-person-fill-check" data-icon="bi-person-fill-check">bi-person-fill-check</option>
                                        <option value="bi-person-fill-dash" data-icon="bi-person-fill-dash">bi-person-fill-dash</option>
                                        <option value="bi-person-fill-down" data-icon="bi-person-fill-down">bi-person-fill-down</option>
                                        <option value="bi-person-fill-exclamation" data-icon="bi-person-fill-exclamation">bi-person-fill-exclamation</option>
                                        <option value="bi-person-fill-gear" data-icon="bi-person-fill-gear">bi-person-fill-gear</option>
                                        <option value="bi-person-fill-lock" data-icon="bi-person-fill-lock">bi-person-fill-lock</option>
                                        <option value="bi-person-fill-slash" data-icon="bi-person-fill-slash">bi-person-fill-slash</option>
                                        <option value="bi-person-fill-up" data-icon="bi-person-fill-up">bi-person-fill-up</option>
                                        <option value="bi-person-fill-x" data-icon="bi-person-fill-x">bi-person-fill-x</option>
                                        <option value="bi-person-gear" data-icon="bi-person-gear">bi-person-gear</option>
                                        <option value="bi-person-lock" data-icon="bi-person-lock">bi-person-lock</option>
                                        <option value="bi-person-slash" data-icon="bi-person-slash">bi-person-slash</option>
                                        <option value="bi-person-up" data-icon="bi-person-up">bi-person-up</option>
                                        <option value="bi-scooter" data-icon="bi-scooter">bi-scooter</option>
                                        <option value="bi-taxi-front-fill" data-icon="bi-taxi-front-fill">bi-taxi-front-fill</option>
                                        <option value="bi-taxi-front" data-icon="bi-taxi-front">bi-taxi-front</option>
                                        <option value="bi-amd" data-icon="bi-amd">bi-amd</option>
                                        <option value="bi-database-add" data-icon="bi-database-add">bi-database-add</option>
                                        <option value="bi-database-check" data-icon="bi-database-check">bi-database-check</option>
                                        <option value="bi-database-dash" data-icon="bi-database-dash">bi-database-dash</option>
                                        <option value="bi-database-down" data-icon="bi-database-down">bi-database-down</option>
                                        <option value="bi-database-exclamation" data-icon="bi-database-exclamation">bi-database-exclamation</option>
                                        <option value="bi-database-fill-add" data-icon="bi-database-fill-add">bi-database-fill-add</option>
                                        <option value="bi-database-fill-check" data-icon="bi-database-fill-check">bi-database-fill-check</option>
                                        <option value="bi-database-fill-dash" data-icon="bi-database-fill-dash">bi-database-fill-dash</option>
                                        <option value="bi-database-fill-down" data-icon="bi-database-fill-down">bi-database-fill-down</option>
                                        <option value="bi-database-fill-exclamation" data-icon="bi-database-fill-exclamation">bi-database-fill-exclamation</option>
                                        <option value="bi-database-fill-gear" data-icon="bi-database-fill-gear">bi-database-fill-gear</option>
                                        <option value="bi-database-fill-lock" data-icon="bi-database-fill-lock">bi-database-fill-lock</option>
                                        <option value="bi-database-fill-slash" data-icon="bi-database-fill-slash">bi-database-fill-slash</option>
                                        <option value="bi-database-fill-up" data-icon="bi-database-fill-up">bi-database-fill-up</option>
                                        <option value="bi-database-fill-x" data-icon="bi-database-fill-x">bi-database-fill-x</option>
                                        <option value="bi-database-fill" data-icon="bi-database-fill">bi-database-fill</option>
                                        <option value="bi-database-gear" data-icon="bi-database-gear">bi-database-gear</option>
                                        <option value="bi-database-lock" data-icon="bi-database-lock">bi-database-lock</option>
                                        <option value="bi-database-slash" data-icon="bi-database-slash">bi-database-slash</option>
                                        <option value="bi-database-up" data-icon="bi-database-up">bi-database-up</option>
                                        <option value="bi-database-x" data-icon="bi-database-x">bi-database-x</option>
                                        <option value="bi-database" data-icon="bi-database">bi-database</option>
                                        <option value="bi-houses-fill" data-icon="bi-houses-fill">bi-houses-fill</option>
                                        <option value="bi-houses" data-icon="bi-houses">bi-houses</option>
                                        <option value="bi-nvidia" data-icon="bi-nvidia">bi-nvidia</option>
                                        <option value="bi-person-vcard-fill" data-icon="bi-person-vcard-fill">bi-person-vcard-fill</option>
                                        <option value="bi-person-vcard" data-icon="bi-person-vcard">bi-person-vcard</option>
                                        <option value="bi-sina-weibo" data-icon="bi-sina-weibo">bi-sina-weibo</option>
                                        <option value="bi-tencent-qq" data-icon="bi-tencent-qq">bi-tencent-qq</option>
                                        <option value="bi-wikipedia" data-icon="bi-wikipedia">bi-wikipedia</option>
                                        <option value="bi-alphabet-uppercase" data-icon="bi-alphabet-uppercase">bi-alphabet-uppercase</option>
                                        <option value="bi-alphabet" data-icon="bi-alphabet">bi-alphabet</option>
                                        <option value="bi-amazon" data-icon="bi-amazon">bi-amazon</option>
                                        <option value="bi-arrows-collapse-vertical" data-icon="bi-arrows-collapse-vertical">bi-arrows-collapse-vertical</option>
                                        <option value="bi-arrows-expand-vertical" data-icon="bi-arrows-expand-vertical">bi-arrows-expand-vertical</option>
                                        <option value="bi-arrows-vertical" data-icon="bi-arrows-vertical">bi-arrows-vertical</option>
                                        <option value="bi-arrows" data-icon="bi-arrows">bi-arrows</option>
                                        <option value="bi-ban-fill" data-icon="bi-ban-fill">bi-ban-fill</option>
                                        <option value="bi-ban" data-icon="bi-ban">bi-ban</option>
                                        <option value="bi-bing" data-icon="bi-bing">bi-bing</option>
                                        <option value="bi-cake" data-icon="bi-cake">bi-cake</option>
                                        <option value="bi-cake2" data-icon="bi-cake2">bi-cake2</option>
                                        <option value="bi-cookie" data-icon="bi-cookie">bi-cookie</option>
                                        <option value="bi-copy" data-icon="bi-copy">bi-copy</option>
                                        <option value="bi-crosshair" data-icon="bi-crosshair">bi-crosshair</option>
                                        <option value="bi-crosshair2" data-icon="bi-crosshair2">bi-crosshair2</option>
                                        <option value="bi-emoji-astonished-fill" data-icon="bi-emoji-astonished-fill">bi-emoji-astonished-fill</option>
                                        <option value="bi-emoji-astonished" data-icon="bi-emoji-astonished">bi-emoji-astonished</option>
                                        <option value="bi-emoji-grimace-fill" data-icon="bi-emoji-grimace-fill">bi-emoji-grimace-fill</option>
                                        <option value="bi-emoji-grimace" data-icon="bi-emoji-grimace">bi-emoji-grimace</option>
                                        <option value="bi-emoji-grin-fill" data-icon="bi-emoji-grin-fill">bi-emoji-grin-fill</option>
                                        <option value="bi-emoji-grin" data-icon="bi-emoji-grin">bi-emoji-grin</option>
                                        <option value="bi-emoji-surprise-fill" data-icon="bi-emoji-surprise-fill">bi-emoji-surprise-fill</option>
                                        <option value="bi-emoji-surprise" data-icon="bi-emoji-surprise">bi-emoji-surprise</option>
                                        <option value="bi-emoji-tear-fill" data-icon="bi-emoji-tear-fill">bi-emoji-tear-fill</option>
                                        <option value="bi-emoji-tear" data-icon="bi-emoji-tear">bi-emoji-tear</option>
                                        <option value="bi-envelope-arrow-down-fill" data-icon="bi-envelope-arrow-down-fill">bi-envelope-arrow-down-fill</option>
                                        <option value="bi-envelope-arrow-down" data-icon="bi-envelope-arrow-down">bi-envelope-arrow-down</option>
                                        <option value="bi-envelope-arrow-up-fill" data-icon="bi-envelope-arrow-up-fill">bi-envelope-arrow-up-fill</option>
                                        <option value="bi-envelope-arrow-up" data-icon="bi-envelope-arrow-up">bi-envelope-arrow-up</option>
                                        <option value="bi-feather" data-icon="bi-feather">bi-feather</option>
                                        <option value="bi-feather2" data-icon="bi-feather2">bi-feather2</option>
                                        <option value="bi-floppy-fill" data-icon="bi-floppy-fill">bi-floppy-fill</option>
                                        <option value="bi-floppy" data-icon="bi-floppy">bi-floppy</option>
                                        <option value="bi-floppy2-fill" data-icon="bi-floppy2-fill">bi-floppy2-fill</option>
                                        <option value="bi-floppy2" data-icon="bi-floppy2">bi-floppy2</option>
                                        <option value="bi-gitlab" data-icon="bi-gitlab">bi-gitlab</option>
                                        <option value="bi-highlighter" data-icon="bi-highlighter">bi-highlighter</option>
                                        <option value="bi-marker-tip" data-icon="bi-marker-tip">bi-marker-tip</option>
                                        <option value="bi-nvme-fill" data-icon="bi-nvme-fill">bi-nvme-fill</option>
                                        <option value="bi-nvme" data-icon="bi-nvme">bi-nvme</option>
                                        <option value="bi-opencollective" data-icon="bi-opencollective">bi-opencollective</option>
                                        <option value="bi-pci-card-network" data-icon="bi-pci-card-network">bi-pci-card-network</option>
                                        <option value="bi-pci-card-sound" data-icon="bi-pci-card-sound">bi-pci-card-sound</option>
                                        <option value="bi-radar" data-icon="bi-radar">bi-radar</option>
                                        <option value="bi-send-arrow-down-fill" data-icon="bi-send-arrow-down-fill">bi-send-arrow-down-fill</option>
                                        <option value="bi-send-arrow-down" data-icon="bi-send-arrow-down">bi-send-arrow-down</option>
                                        <option value="bi-send-arrow-up-fill" data-icon="bi-send-arrow-up-fill">bi-send-arrow-up-fill</option>
                                        <option value="bi-send-arrow-up" data-icon="bi-send-arrow-up">bi-send-arrow-up</option>
                                        <option value="bi-sim-slash-fill" data-icon="bi-sim-slash-fill">bi-sim-slash-fill</option>
                                        <option value="bi-sim-slash" data-icon="bi-sim-slash">bi-sim-slash</option>
                                        <option value="bi-sourceforge" data-icon="bi-sourceforge">bi-sourceforge</option>
                                        <option value="bi-substack" data-icon="bi-substack">bi-substack</option>
                                        <option value="bi-threads-fill" data-icon="bi-threads-fill">bi-threads-fill</option>
                                        <option value="bi-threads" data-icon="bi-threads">bi-threads</option>
                                        <option value="bi-transparency" data-icon="bi-transparency">bi-transparency</option>
                                        <option value="bi-twitter-x" data-icon="bi-twitter-x">bi-twitter-x</option>
                                        <option value="bi-type-h4" data-icon="bi-type-h4">bi-type-h4</option>
                                        <option value="bi-type-h5" data-icon="bi-type-h5">bi-type-h5</option>
                                        <option value="bi-type-h6" data-icon="bi-type-h6">bi-type-h6</option>
                                        <option value="bi-backpack-fill" data-icon="bi-backpack-fill">bi-backpack-fill</option>
                                        <option value="bi-backpack" data-icon="bi-backpack">bi-backpack</option>
                                        <option value="bi-backpack2-fill" data-icon="bi-backpack2-fill">bi-backpack2-fill</option>
                                        <option value="bi-backpack2" data-icon="bi-backpack2">bi-backpack2</option>
                                        <option value="bi-backpack3-fill" data-icon="bi-backpack3-fill">bi-backpack3-fill</option>
                                        <option value="bi-backpack3" data-icon="bi-backpack3">bi-backpack3</option>
                                        <option value="bi-backpack4-fill" data-icon="bi-backpack4-fill">bi-backpack4-fill</option>
                                        <option value="bi-backpack4" data-icon="bi-backpack4">bi-backpack4</option>
                                        <option value="bi-brilliance" data-icon="bi-brilliance">bi-brilliance</option>
                                        <option value="bi-cake-fill" data-icon="bi-cake-fill">bi-cake-fill</option>
                                        <option value="bi-cake2-fill" data-icon="bi-cake2-fill">bi-cake2-fill</option>
                                        <option value="bi-duffle-fill" data-icon="bi-duffle-fill">bi-duffle-fill</option>
                                        <option value="bi-duffle" data-icon="bi-duffle">bi-duffle</option>
                                        <option value="bi-exposure" data-icon="bi-exposure">bi-exposure</option>
                                        <option value="bi-gender-neuter" data-icon="bi-gender-neuter">bi-gender-neuter</option>
                                        <option value="bi-highlights" data-icon="bi-highlights">bi-highlights</option>
                                        <option value="bi-luggage-fill" data-icon="bi-luggage-fill">bi-luggage-fill</option>
                                        <option value="bi-luggage" data-icon="bi-luggage">bi-luggage</option>
                                        <option value="bi-mailbox-flag" data-icon="bi-mailbox-flag">bi-mailbox-flag</option>
                                        <option value="bi-mailbox2-flag" data-icon="bi-mailbox2-flag">bi-mailbox2-flag</option>
                                        <option value="bi-noise-reduction" data-icon="bi-noise-reduction">bi-noise-reduction</option>
                                        <option value="bi-passport-fill" data-icon="bi-passport-fill">bi-passport-fill</option>
                                        <option value="bi-passport" data-icon="bi-passport">bi-passport</option>
                                        <option value="bi-person-arms-up" data-icon="bi-person-arms-up">bi-person-arms-up</option>
                                        <option value="bi-person-raised-hand" data-icon="bi-person-raised-hand">bi-person-raised-hand</option>
                                        <option value="bi-person-standing-dress" data-icon="bi-person-standing-dress">bi-person-standing-dress</option>
                                        <option value="bi-person-standing" data-icon="bi-person-standing">bi-person-standing</option>
                                        <option value="bi-person-walking" data-icon="bi-person-walking">bi-person-walking</option>
                                        <option value="bi-person-wheelchair" data-icon="bi-person-wheelchair">bi-person-wheelchair</option>
                                        <option value="bi-shadows" data-icon="bi-shadows">bi-shadows</option>
                                        <option value="bi-suitcase-fill" data-icon="bi-suitcase-fill">bi-suitcase-fill</option>
                                        <option value="bi-suitcase-lg-fill" data-icon="bi-suitcase-lg-fill">bi-suitcase-lg-fill</option>
                                        <option value="bi-suitcase-lg" data-icon="bi-suitcase-lg">bi-suitcase-lg</option>
                                        <option value="bi-suitcase" data-icon="bi-suitcase">bi-suitcase</option>
                                        <option value="bi-suitcase2-fill" data-icon="bi-suitcase2-fill">bi-suitcase2-fill</option>
                                        <option value="bi-suitcase2" data-icon="bi-suitcase2">bi-suitcase2</option>
                                        <option value="bi-vignette" data-icon="bi-vignette">bi-vignette</option>
                                        <option value="uil uil-comment-block" data-icon="uil uil-comment-block">uil-comment-block</option>
                                        <option value="uil uil-comment-alt-edit" data-icon="uil uil-comment-alt-edit">uil-comment-alt-edit</option>
                                        <option value="uil uil-comments" data-icon="uil uil-comments">uil-comments</option>
                                        <option value="uil uil-comment-alt-search" data-icon="uil uil-comment-alt-search">uil-comment-alt-search</option>
                                        <option value="uil uil-comment-shield" data-icon="uil uil-comment-shield">uil-comment-shield</option>
                                        <option value="uil uil-comment-alt-dots" data-icon="uil uil-comment-alt-dots">uil-comment-alt-dots</option>
                                        <option value="uil uil-comment-download" data-icon="uil uil-comment-download">uil-comment-download</option>
                                        <option value="uil uil-comment-check" data-icon="uil uil-comment-check">uil-comment-check</option>
                                        <option value="uil uil-comment-alt-chart-lines" data-icon="uil uil-comment-alt-chart-lines">uil-comment-alt-chart-lines</option>
                                        <option value="uil uil-comment-alt-download" data-icon="uil uil-comment-alt-download">uil-comment-alt-download</option>
                                        <option value="uil uil-comment-alt-lock" data-icon="uil uil-comment-alt-lock">uil-comment-alt-lock</option>
                                        <option value="uil uil-comment-medical" data-icon="uil uil-comment-medical">uil-comment-medical</option>
                                        <option value="uil uil-comment-alt-heart" data-icon="uil uil-comment-alt-heart">uil-comment-alt-heart</option>
                                        <option value="uil uil-comment" data-icon="uil uil-comment">uil-comment</option>
                                        <option value="uil uil-comment-alt-share" data-icon="uil uil-comment-alt-share">uil-comment-alt-share</option>
                                        <option value="uil uil-comment-alt-upload" data-icon="uil uil-comment-alt-upload">uil-comment-alt-upload</option>
                                        <option value="uil uil-comment-dots" data-icon="uil uil-comment-dots">uil-comment-dots</option>
                                        <option value="uil uil-comment-alt-lines" data-icon="uil uil-comment-alt-lines">uil-comment-alt-lines</option>
                                        <option value="uil uil-comment-lock" data-icon="uil uil-comment-lock">uil-comment-lock</option>
                                        <option value="uil uil-comment-heart" data-icon="uil uil-comment-heart">uil-comment-heart</option>
                                        <option value="uil uil-comment-info-alt" data-icon="uil uil-comment-info-alt">uil-comment-info-alt</option>
                                        <option value="uil uil-comment-upload" data-icon="uil uil-comment-upload">uil-comment-upload</option>
                                        <option value="uil uil-comment-alt-medical" data-icon="uil uil-comment-alt-medical">uil-comment-alt-medical</option>
                                        <option value="uil uil-chat-info" data-icon="uil uil-chat-info">uil-chat-info</option>
                                        <option value="uil uil-comment-alt-notes" data-icon="uil uil-comment-alt-notes">uil-comment-alt-notes</option>
                                        <option value="uil uil-comment-alt-plus" data-icon="uil uil-comment-alt-plus">uil-comment-alt-plus</option>
                                        <option value="uil uil-comment-alt-image" data-icon="uil uil-comment-alt-image">uil-comment-alt-image</option>
                                        <option value="uil uil-comment-share" data-icon="uil uil-comment-share">uil-comment-share</option>
                                        <option value="uil uil-comment-edit" data-icon="uil uil-comment-edit">uil-comment-edit</option>
                                        <option value="uil uil-comment-alt-block" data-icon="uil uil-comment-alt-block">uil-comment-alt-block</option>
                                        <option value="uil uil-comment-chart-line" data-icon="uil uil-comment-chart-line">uil-comment-chart-line</option>
                                        <option value="uil uil-comment-alt-question" data-icon="uil uil-comment-alt-question">uil-comment-alt-question</option>
                                        <option value="uil uil-comment-lines" data-icon="uil uil-comment-lines">uil-comment-lines</option>
                                        <option value="uil uil-comment-redo" data-icon="uil uil-comment-redo">uil-comment-redo</option>
                                        <option value="uil uil-comment-alt-check" data-icon="uil uil-comment-alt-check">uil-comment-alt-check</option>
                                        <option value="uil uil-comment-alt-shield" data-icon="uil uil-comment-alt-shield">uil-comment-alt-shield</option>
                                        <option value="uil uil-chat" data-icon="uil uil-chat">uil-chat</option>
                                        <option value="uil uil-comment-alt-message" data-icon="uil uil-comment-alt-message">uil-comment-alt-message</option>
                                        <option value="uil uil-comment-search" data-icon="uil uil-comment-search">uil-comment-search</option>
                                        <option value="uil uil-chat-bubble-user" data-icon="uil uil-chat-bubble-user">uil-chat-bubble-user</option>
                                        <option value="uil uil-comments-alt" data-icon="uil uil-comments-alt">uil-comments-alt</option>
                                        <option value="uil uil-comment-image" data-icon="uil uil-comment-image">uil-comment-image</option>
                                        <option value="uil uil-comment-alt" data-icon="uil uil-comment-alt">uil-comment-alt</option>
                                        <option value="uil uil-comment-verify" data-icon="uil uil-comment-verify">uil-comment-verify</option>
                                        <option value="uil uil-comment-plus" data-icon="uil uil-comment-plus">uil-comment-plus</option>
                                        <option value="uil uil-comment-question" data-icon="uil uil-comment-question">uil-comment-question</option>
                                        <option value="uil uil-comment-notes" data-icon="uil uil-comment-notes">uil-comment-notes</option>
                                        <option value="uil uil-comment-alt-exclamation" data-icon="uil uil-comment-alt-exclamation">uil-comment-alt-exclamation</option>
                                        <option value="uil uil-comment-exclamation" data-icon="uil uil-comment-exclamation">uil-comment-exclamation</option>
                                        <option value="uil uil-no-entry" data-icon="uil uil-no-entry">uil-no-entry</option>
                                        <option value="uil uil-screw" data-icon="uil uil-screw">uil-screw</option>
                                        <option value="uil uil-tape" data-icon="uil uil-tape">uil-tape</option>
                                        <option value="uil uil-paint-tool" data-icon="uil uil-paint-tool">uil-paint-tool</option>
                                        <option value="uil uil-comment-alt-verify" data-icon="uil uil-comment-alt-verify">uil-comment-alt-verify</option>
                                        <option value="uil uil-comment-alt-redo" data-icon="uil uil-comment-alt-redo">uil-comment-alt-redo</option>
                                        <option value="uil uil-trowel" data-icon="uil uil-trowel">uil-trowel</option>
                                        <option value="uil uil-drill" data-icon="uil uil-drill">uil-drill</option>
                                        <option value="uil uil-comment-info" data-icon="uil uil-comment-info">uil-comment-info</option>
                                        <option value="uil uil-jackhammer" data-icon="uil uil-jackhammer">uil-jackhammer</option>
                                        <option value="uil uil-comment-alt-info" data-icon="uil uil-comment-alt-info">uil-comment-alt-info</option>
                                        <option value="uil uil-wheel-barrow" data-icon="uil uil-wheel-barrow">uil-wheel-barrow</option>
                                        <option value="uil uil-comment-message" data-icon="uil uil-comment-message">uil-comment-message</option>
                                        <option value="uil uil-shovel" data-icon="uil uil-shovel">uil-shovel</option>
                                        <option value="uil uil-keyhole-square" data-icon="uil uil-keyhole-square">uil-keyhole-square</option>
                                        <option value="uil uil-keyhole-circle" data-icon="uil uil-keyhole-circle">uil-keyhole-circle</option>
                                        <option value="uil uil-traffic-barrier" data-icon="uil uil-traffic-barrier">uil-traffic-barrier</option>
                                        <option value="uil uil-keyhole-square-full" data-icon="uil uil-keyhole-square-full">uil-keyhole-square-full</option>
                                        <option value="uil uil-wall" data-icon="uil uil-wall">uil-wall</option>
                                        <option value="uil uil-constructor" data-icon="uil uil-constructor">uil-constructor</option>
                                        <option value="uil uil-hard-hat" data-icon="uil uil-hard-hat">uil-hard-hat</option>
                                        <option value="uil uil-shield-exclamation" data-icon="uil uil-shield-exclamation">uil-shield-exclamation</option>
                                        <option value="uil uil-lock-open-alt" data-icon="uil uil-lock-open-alt">uil-lock-open-alt</option>
                                        <option value="uil uil-unlock" data-icon="uil uil-unlock">uil-unlock</option>
                                        <option value="uil uil-unlock-alt" data-icon="uil uil-unlock-alt">uil-unlock-alt</option>
                                        <option value="uil uil-heart-alt" data-icon="uil uil-heart-alt">uil-heart-alt</option>
                                        <option value="uil uil-octagon" data-icon="uil uil-octagon">uil-octagon</option>
                                        <option value="uil uil-lock" data-icon="uil uil-lock">uil-lock</option>
                                        <option value="uil uil-triangle" data-icon="uil uil-triangle">uil-triangle</option>
                                        <option value="uil uil-star" data-icon="uil uil-star">uil-star</option>
                                        <option value="uil uil-shield-slash" data-icon="uil uil-shield-slash">uil-shield-slash</option>
                                        <option value="uil uil-lock-access" data-icon="uil uil-lock-access">uil-lock-access</option>
                                        <option value="uil uil-pentagon" data-icon="uil uil-pentagon">uil-pentagon</option>
                                        <option value="uil uil-shield-check" data-icon="uil uil-shield-check">uil-shield-check</option>
                                        <option value="uil uil-square" data-icon="uil uil-square">uil-square</option>
                                        <option value="uil uil-shield-question" data-icon="uil uil-shield-question">uil-shield-question</option>
                                        <option value="uil uil-padlock" data-icon="uil uil-padlock">uil-padlock</option>
                                        <option value="uil uil-wheelchair" data-icon="uil uil-wheelchair">uil-wheelchair</option>
                                        <option value="uil uil-lock-alt" data-icon="uil uil-lock-alt">uil-lock-alt</option>
                                        <option value="uil uil-polygon" data-icon="uil uil-polygon">uil-polygon</option>
                                        <option value="uil uil-circle" data-icon="uil uil-circle">uil-circle</option>
                                        <option value="uil uil-copyright" data-icon="uil uil-copyright">uil-copyright</option>
                                        <option value="uil uil-closed-captioning" data-icon="uil uil-closed-captioning">uil-closed-captioning</option>
                                        <option value="uil uil-trademark" data-icon="uil uil-trademark">uil-trademark</option>
                                        <option value="uil uil-heart" data-icon="uil uil-heart">uil-heart</option>
                                        <option value="uil uil-parking-circle" data-icon="uil uil-parking-circle">uil-parking-circle</option>
                                        <option value="uil uil-mars" data-icon="uil uil-mars">uil-mars</option>
                                        <option value="uil uil-sad-squint" data-icon="uil uil-sad-squint">uil-sad-squint</option>
                                        <option value="uil uil-registered" data-icon="uil uil-registered">uil-registered</option>
                                        <option value="uil uil-nerd" data-icon="uil uil-nerd">uil-nerd</option>
                                        <option value="uil uil-smile" data-icon="uil uil-smile">uil-smile</option>
                                        <option value="uil uil-meh-alt" data-icon="uil uil-meh-alt">uil-meh-alt</option>
                                        <option value="uil uil-annoyed" data-icon="uil uil-annoyed">uil-annoyed</option>
                                        <option value="uil uil-sad-dizzy" data-icon="uil uil-sad-dizzy">uil-sad-dizzy</option>
                                        <option value="uil uil-sad" data-icon="uil uil-sad">uil-sad</option>
                                        <option value="uil uil-servicemark" data-icon="uil uil-servicemark">uil-servicemark</option>
                                        <option value="uil uil-closed-captioning-slash" data-icon="uil uil-closed-captioning-slash">uil-closed-captioning-slash</option>
                                        <option value="uil uil-venus" data-icon="uil uil-venus">uil-venus</option>
                                        <option value="uil uil-creative-commons-pd" data-icon="uil uil-creative-commons-pd">uil-creative-commons-pd</option>
                                        <option value="uil uil-frown" data-icon="uil uil-frown">uil-frown</option>
                                        <option value="uil uil-accessible-icon-alt" data-icon="uil uil-accessible-icon-alt">uil-accessible-icon-alt</option>
                                        <option value="uil uil-squint" data-icon="uil uil-squint">uil-squint</option>
                                        <option value="uil uil-meh" data-icon="uil uil-meh">uil-meh</option>
                                        <option value="uil uil-silence" data-icon="uil uil-silence">uil-silence</option>
                                        <option value="uil uil-dizzy-meh" data-icon="uil uil-dizzy-meh">uil-dizzy-meh</option>
                                        <option value="uil uil-parking-square" data-icon="uil uil-parking-square">uil-parking-square</option>
                                        <option value="uil uil-shield" data-icon="uil uil-shield">uil-shield</option>
                                        <option value="uil uil-smile-dizzy" data-icon="uil uil-smile-dizzy">uil-smile-dizzy</option>
                                        <option value="uil uil-ninja" data-icon="uil uil-ninja">uil-ninja</option>
                                        <option value="uil uil-smile-beam" data-icon="uil uil-smile-beam">uil-smile-beam</option>
                                        <option value="uil uil-laughing" data-icon="uil uil-laughing">uil-laughing</option>
                                        <option value="uil uil-previous" data-icon="uil uil-previous">uil-previous</option>
                                        <option value="uil uil-film" data-icon="uil uil-film">uil-film</option>
                                        <option value="uil uil-image-broken" data-icon="uil uil-image-broken">uil-image-broken</option>
                                        <option value="uil uil-incoming-call" data-icon="uil uil-incoming-call">uil-incoming-call</option>
                                        <option value="uil uil-image-check" data-icon="uil uil-image-check">uil-image-check</option>
                                        <option value="uil uil-image-plus" data-icon="uil uil-image-plus">uil-image-plus</option>
                                        <option value="uil uil-video" data-icon="uil uil-video">uil-video</option>
                                        <option value="uil uil-camera-plus" data-icon="uil uil-camera-plus">uil-camera-plus</option>
                                        <option value="uil uil-play" data-icon="uil uil-play">uil-play</option>
                                        <option value="uil uil-cloud-question" data-icon="uil uil-cloud-question">uil-cloud-question</option>
                                        <option value="uil uil-skip-forward" data-icon="uil uil-skip-forward">uil-skip-forward</option>
                                        <option value="uil uil-image-lock" data-icon="uil uil-image-lock">uil-image-lock</option>
                                        <option value="uil uil-skip-forward-circle" data-icon="uil uil-skip-forward-circle">uil-skip-forward-circle</option>
                                        <option value="uil uil-skip-forward-alt" data-icon="uil uil-skip-forward-alt">uil-skip-forward-alt</option>
                                        <option value="uil uil-step-backward-circle" data-icon="uil uil-step-backward-circle">uil-step-backward-circle</option>
                                        <option value="uil uil-boombox" data-icon="uil uil-boombox">uil-boombox</option>
                                        <option value="uil uil-step-backward-alt" data-icon="uil uil-step-backward-alt">uil-step-backward-alt</option>
                                        <option value="uil uil-image-share" data-icon="uil uil-image-share">uil-image-share</option>
                                        <option value="uil uil-cloud-database-tree" data-icon="uil uil-cloud-database-tree">uil-cloud-database-tree</option>
                                        <option value="uil uil-snowflake" data-icon="uil uil-snowflake">uil-snowflake</option>
                                        <option value="uil uil-temperature-quarter" data-icon="uil uil-temperature-quarter">uil-temperature-quarter</option>
                                        <option value="uil uil-cloud-showers-heavy" data-icon="uil uil-cloud-showers-heavy">uil-cloud-showers-heavy</option>
                                        <option value="uil uil-fahrenheit" data-icon="uil uil-fahrenheit">uil-fahrenheit</option>
                                        <option value="uil uil-snowflake-alt" data-icon="uil uil-snowflake-alt">uil-snowflake-alt</option>
                                        <option value="uil uil-cloud-wind" data-icon="uil uil-cloud-wind">uil-cloud-wind</option>
                                        <option value="uil uil-tornado" data-icon="uil uil-tornado">uil-tornado</option>
                                        <option value="uil uil-cloud-sun-hail" data-icon="uil uil-cloud-sun-hail">uil-cloud-sun-hail</option>
                                        <option value="uil uil-cloud" data-icon="uil uil-cloud">uil-cloud</option>
                                        <option value="uil uil-image-edit" data-icon="uil uil-image-edit">uil-image-edit</option>
                                        <option value="uil uil-cloud-moon-hail" data-icon="uil uil-cloud-moon-hail">uil-cloud-moon-hail</option>
                                        <option value="uil uil-temperature-empty" data-icon="uil uil-temperature-empty">uil-temperature-empty</option>
                                        <option value="uil uil-cloud-sun-rain" data-icon="uil uil-cloud-sun-rain">uil-cloud-sun-rain</option>
                                        <option value="uil uil-thunderstorm" data-icon="uil uil-thunderstorm">uil-thunderstorm</option>
                                        <option value="uil uil-thunderstorm-sun" data-icon="uil uil-thunderstorm-sun">uil-thunderstorm-sun</option>
                                        <option value="uil uil-temperature-three-quarter" data-icon="uil uil-temperature-three-quarter">uil-temperature-three-quarteoption>li>
                                        <option value="uil uil-thunderstorm-moon" data-icon="uil uil-thunderstorm-moon">uil-thunderstorm-moon</option>
                                        <option value="uil uil-snow-flake" data-icon="uil uil-snow-flake">uil-snow-flake</option>
                                        <option value="uil uil-raindrops" data-icon="uil uil-raindrops">uil-raindrops</option>
                                        <option value="uil uil-forecastcloud-moon-tear" data-icon="uil uil-forecastcloud-moon-tear">uil-forecastcloud-moon-tear</option>
                                        <option value="uil uil-cloud-rain" data-icon="uil uil-cloud-rain">uil-cloud-rain</option>
                                        <option value="uil uil-cloud-sun-tear" data-icon="uil uil-cloud-sun-tear">uil-cloud-sun-tear</option>
                                        <option value="uil uil-cloud-moon-showers" data-icon="uil uil-cloud-moon-showers">uil-cloud-moon-showers</option>
                                        <option value="uil uil-cloud-rain-sun" data-icon="uil uil-cloud-rain-sun">uil-cloud-rain-sun</option>
                                        <option value="uil uil-cloud-showers-alt" data-icon="uil uil-cloud-showers-alt">uil-cloud-showers-alt</option>
                                        <option value="uil uil-cloud-showers" data-icon="uil uil-cloud-showers">uil-cloud-showers</option>
                                        <option value="uil uil-cloud-hail" data-icon="uil uil-cloud-hail">uil-cloud-hail</option>
                                        <option value="uil uil-cloud-drizzle" data-icon="uil uil-cloud-drizzle">uil-cloud-drizzle</option>
                                        <option value="uil uil-cloud-moon" data-icon="uil uil-cloud-moon">uil-cloud-moon</option>
                                        <option value="uil uil-moon" data-icon="uil uil-moon">uil-moon</option>
                                        <option value="uil uil-cloud-moon-rain" data-icon="uil uil-cloud-moon-rain">uil-cloud-moon-rain</option>
                                        <option value="uil uil-moonset" data-icon="uil uil-moonset">uil-moonset</option>
                                        <option value="uil uil-celsius" data-icon="uil uil-celsius">uil-celsius</option>
                                        <option value="uil uil-image-upload" data-icon="uil uil-image-upload">uil-image-upload</option>
                                        <option value="uil uil-cloud-sun-meatball" data-icon="uil uil-cloud-sun-meatball">uil-cloud-sun-meatball</option>
                                        <option value="uil uil-windsock" data-icon="uil uil-windsock">uil-windsock</option>
                                        <option value="uil uil-stop-circle" data-icon="uil uil-stop-circle">uil-stop-circle</option>
                                        <option value="uil uil-temperature-plus" data-icon="uil uil-temperature-plus">uil-temperature-plus</option>
                                        <option value="uil uil-moon-eclipse" data-icon="uil uil-moon-eclipse">uil-moon-eclipse</option>
                                        <option value="uil uil-vertical-align-top" data-icon="uil uil-vertical-align-top">uil-vertical-align-top</option>
                                        <option value="uil uil-cloud-meatball" data-icon="uil uil-cloud-meatball">uil-cloud-meatball</option>
                                        <option value="uil uil-temperature" data-icon="uil uil-temperature">uil-temperature</option>
                                        <option value="uil uil-cloud-moon-meatball" data-icon="uil uil-cloud-moon-meatball">uil-cloud-moon-meatball</option>
                                        <option value="uil uil-flip-h-alt" data-icon="uil uil-flip-h-alt">uil-flip-h-alt</option>
                                        <option value="uil uil-vector-square-alt" data-icon="uil uil-vector-square-alt">uil-vector-square-alt</option>
                                        <option value="uil uil-object-ungroup" data-icon="uil uil-object-ungroup">uil-object-ungroup</option>
                                        <option value="uil uil-th" data-icon="uil uil-th">uil-th</option>
                                        <option value="uil uil-images" data-icon="uil uil-images">uil-images</option>
                                        <option value="uil uil-temperature-minus" data-icon="uil uil-temperature-minus">uil-temperature-minus</option>
                                        <option value="uil uil-flip-v" data-icon="uil uil-flip-v">uil-flip-v</option>
                                        <option value="uil uil-cloud-sun-rain-alt" data-icon="uil uil-cloud-sun-rain-alt">uil-cloud-sun-rain-alt</option>
                                        <option value="uil uil-square-full" data-icon="uil uil-square-full">uil-square-full</option>
                                        <option value="uil uil-vertical-distribute-bottom" data-icon="uil uil-vertical-distribute-bottom">uil-vertical-distributoption>span></li>
                                        <option value="uil uil-panorama-h-alt" data-icon="uil uil-panorama-h-alt">uil-panorama-h-alt</option>
                                        <option value="uil uil-pathfinder-unite" data-icon="uil uil-pathfinder-unite">uil-pathfinder-unite</option>
                                        <option value="uil uil-wind" data-icon="uil uil-wind">uil-wind</option>
                                        <option value="uil uil-vector-square" data-icon="uil uil-vector-square">uil-vector-square</option>
                                        <option value="uil uil-vertical-align-bottom" data-icon="uil uil-vertical-align-bottom">uil-vertical-align-bottom</option>
                                        <option value="uil uil-ruler" data-icon="uil uil-ruler">uil-ruler</option>
                                        <option value="uil uil-object-group" data-icon="uil uil-object-group">uil-object-group</option>
                                        <option value="uil uil-panorama-v" data-icon="uil uil-panorama-v">uil-panorama-v</option>
                                        <option value="uil uil-panorama-h" data-icon="uil uil-panorama-h">uil-panorama-h</option>
                                        <option value="uil uil-temperature-half" data-icon="uil uil-temperature-half">uil-temperature-half</option>
                                        <option value="uil uil-layers-alt" data-icon="uil uil-layers-alt">uil-layers-alt</option>
                                        <option value="uil uil-line-alt" data-icon="uil uil-line-alt">uil-line-alt</option>
                                        <option value="uil uil-image-resize-landscape" data-icon="uil uil-image-resize-landscape">uil-image-resize-landscape</option>
                                        <option value="uil uil-image-resize-square" data-icon="uil uil-image-resize-square">uil-image-resize-square</option>
                                        <option value="uil uil-pathfinder" data-icon="uil uil-pathfinder">uil-pathfinder</option>
                                        <option value="uil uil-flip-h" data-icon="uil uil-flip-h">uil-flip-h</option>
                                        <li><i class="uil uil-horizontal-distribution-right" data-icon="uil <option-value">uil-horizontal-distribution-right</option>
                                        <option value="uil uil-horizontal-distribution-left" data-icon="uil uil-horizontal-distribution-left">uil-horizontal-distributoption>span></li>
                                        <li><i class="uil uil-horizontal-distribution-center" data-icon="uil <option-valuer">uil-horizontal-distribution-center</option>
                                        <option value="uil uil-horizontal-align-center" data-icon="uil uil-horizontal-align-center">uil-horizontal-align-center</option>
                                        <option value="uil uil-ruler-combined" data-icon="uil uil-ruler-combined">uil-ruler-combined</option>
                                        <option value="uil uil-horizontal-align-right" data-icon="uil uil-horizontal-align-right">uil-horizontal-align-right</option>
                                        <option value="uil uil-horizontal-align-left" data-icon="uil uil-horizontal-align-left">uil-horizontal-align-left</option>
                                        <option value="uil uil-table" data-icon="uil uil-table">uil-table</option>
                                        <option value="uil uil-th-slash" data-icon="uil uil-th-slash">uil-th-slash</option>
                                        <option value="uil uil-crop-alt-rotate-right" data-icon="uil uil-crop-alt-rotate-right">uil-crop-alt-rotate-right</option>
                                        <option value="uil uil-apps" data-icon="uil uil-apps">uil-apps</option>
                                        <option value="uil uil-exclude" data-icon="uil uil-exclude">uil-exclude</option>
                                        <option value="uil uil-crop-alt" data-icon="uil uil-crop-alt">uil-crop-alt</option>
                                        <option value="uil uil-grids" data-icon="uil uil-grids">uil-grids</option>
                                        <option value="uil uil-flip-v-alt" data-icon="uil uil-flip-v-alt">uil-flip-v-alt</option>
                                        <option value="uil uil-vertical-distribution-center" data-icon="uil uil-vertical-distribution-center">uil-vertical-distributiooption>span></li>
                                        <option value="uil uil-crop-alt-rotate-left" data-icon="uil uil-crop-alt-rotate-left">uil-crop-alt-rotate-left</option>
                                        <option value="uil uil-vertical-distribution-top" data-icon="uil uil-vertical-distribution-top">uil-vertical-distribution-tooption>li>
                                        <option value="uil uil-brush-alt" data-icon="uil uil-brush-alt">uil-brush-alt</option>
                                        <option value="uil uil-circle-layer" data-icon="uil uil-circle-layer">uil-circle-layer</option>
                                        <option value="uil uil-modem" data-icon="uil uil-modem">uil-modem</option>
                                        <option value="uil uil-webcam" data-icon="uil uil-webcam">uil-webcam</option>
                                        <option value="uil uil-hdd" data-icon="uil uil-hdd">uil-hdd</option>
                                        <option value="uil uil-monitor" data-icon="uil uil-monitor">uil-monitor</option>
                                        <option value="uil uil-dice-four" data-icon="uil uil-dice-four">uil-dice-four</option>
                                        <option value="uil uil-wifi-router" data-icon="uil uil-wifi-router">uil-wifi-router</option>
                                        <option value="uil uil-dice-five" data-icon="uil uil-dice-five">uil-dice-five</option>
                                        <option value="uil uil-dice-one" data-icon="uil uil-dice-one">uil-dice-one</option>
                                        <option value="uil uil-dice-two" data-icon="uil uil-dice-two">uil-dice-two</option>
                                        <option value="uil uil-dice-six" data-icon="uil uil-dice-six">uil-dice-six</option>
                                        <option value="uil uil-windy" data-icon="uil uil-windy">uil-windy</option>
                                        <option value="uil uil-swatchbook" data-icon="uil uil-swatchbook">uil-swatchbook</option>
                                        <option value="uil uil-cancel" data-icon="uil uil-cancel">uil-cancel</option>
                                        <option value="uil uil-clouds" data-icon="uil uil-clouds">uil-clouds</option>
                                        <option value="uil uil-mountains-sun" data-icon="uil uil-mountains-sun">uil-mountains-sun</option>
                                        <option value="uil uil-history" data-icon="uil uil-history">uil-history</option>
                                        <option value="uil uil-n-a" data-icon="uil uil-n-a">uil-n-a</option>
                                        <option value="uil uil-plane" data-icon="uil uil-plane">uil-plane</option>
                                        <option value="uil uil-plane-departure" data-icon="uil uil-plane-departure">uil-plane-departure</option>
                                        <option value="uil uil-auto-flash" data-icon="uil uil-auto-flash">uil-auto-flash</option>
                                        <option value="uil uil-glass-martini" data-icon="uil uil-glass-martini">uil-glass-martini</option>
                                        <option value="uil uil-mobile-vibrate" data-icon="uil uil-mobile-vibrate">uil-mobile-vibrate</option>
                                        <option value="uil uil-trees" data-icon="uil uil-trees">uil-trees</option>
                                        <option value="uil uil-voicemail" data-icon="uil uil-voicemail">uil-voicemail</option>
                                        <option value="uil uil-voicemail-rectangle" data-icon="uil uil-voicemail-rectangle">uil-voicemail-rectangle</option>
                                        <option value="uil uil-plane-fly" data-icon="uil uil-plane-fly">uil-plane-fly</option>
                                        <option value="uil uil-sync-exclamation" data-icon="uil uil-sync-exclamation">uil-sync-exclamation</option>
                                        <option value="uil uil-tachometer-fast" data-icon="uil uil-tachometer-fast">uil-tachometer-fast</option>
                                        <option value="uil uil-sign-in-alt" data-icon="uil uil-sign-in-alt">uil-sign-in-alt</option>
                                        <option value="uil uil-archive-alt" data-icon="uil uil-archive-alt">uil-archive-alt</option>
                                        <option value="uil uil-power" data-icon="uil uil-power">uil-power</option>
                                        <option value="uil uil-pizza-slice" data-icon="uil uil-pizza-slice">uil-pizza-slice</option>
                                        <option value="uil uil-refresh" data-icon="uil uil-refresh">uil-refresh</option>
                                        <option value="uil uil-anchor" data-icon="uil uil-anchor">uil-anchor</option>
                                        <option value="uil uil-sync-slash" data-icon="uil uil-sync-slash">uil-sync-slash</option>
                                        <option value="uil uil-upload" data-icon="uil uil-upload">uil-upload</option>
                                        <option value="uil uil-glass" data-icon="uil uil-glass">uil-glass</option>
                                        <option value="uil uil-sign-out-alt" data-icon="uil uil-sign-out-alt">uil-sign-out-alt</option>
                                        <option value="uil uil-newspaper" data-icon="uil uil-newspaper">uil-newspaper</option>
                                        <option value="uil uil-signin" data-icon="uil uil-signin">uil-signin</option>
                                        <option value="uil uil-processor" data-icon="uil uil-processor">uil-processor</option>
                                        <option value="uil uil-hunting" data-icon="uil uil-hunting">uil-hunting</option>
                                        <option value="uil uil-coffee" data-icon="uil uil-coffee">uil-coffee</option>
                                        <option value="uil uil-history-alt" data-icon="uil uil-history-alt">uil-history-alt</option>
                                        <option value="uil uil-weight" data-icon="uil uil-weight">uil-weight</option>
                                        <option value="uil uil-plane-arrival" data-icon="uil uil-plane-arrival">uil-plane-arrival</option>
                                        <option value="uil uil-gift" data-icon="uil uil-gift">uil-gift</option>
                                        <option value="uil uil-circuit" data-icon="uil uil-circuit">uil-circuit</option>
                                        <option value="uil uil-archive" data-icon="uil uil-archive">uil-archive</option>
                                        <option value="uil uil-ban" data-icon="uil uil-ban">uil-ban</option>
                                        <option value="uil uil-crosshair-alt" data-icon="uil uil-crosshair-alt">uil-crosshair-alt</option>
                                        <option value="uil uil-crosshair" data-icon="uil uil-crosshair">uil-crosshair</option>
                                        <option value="uil uil-record-audio" data-icon="uil uil-record-audio">uil-record-audio</option>
                                        <option value="uil uil-flower" data-icon="uil uil-flower">uil-flower</option>
                                        <option value="uil uil-airplay" data-icon="uil uil-airplay">uil-airplay</option>
                                        <option value="uil uil-rss-interface" data-icon="uil uil-rss-interface">uil-rss-interface</option>
                                        <option value="uil uil-equal-circle" data-icon="uil uil-equal-circle">uil-equal-circle</option>
                                        <option value="uil uil-shutter" data-icon="uil uil-shutter">uil-shutter</option>
                                        <option value="uil uil-microphone-slash" data-icon="uil uil-microphone-slash">uil-microphone-slash</option>
                                        <option value="uil uil-life-ring" data-icon="uil uil-life-ring">uil-life-ring</option>
                                        <option value="uil uil-sliders-v-alt" data-icon="uil uil-sliders-v-alt">uil-sliders-v-alt</option>
                                        <option value="uil uil-compact-disc" data-icon="uil uil-compact-disc">uil-compact-disc</option>
                                        <option value="uil uil-sitemap" data-icon="uil uil-sitemap">uil-sitemap</option>
                                        <option value="uil uil-sliders-v" data-icon="uil uil-sliders-v">uil-sliders-v</option>
                                        <option value="uil uil-shutter-alt" data-icon="uil uil-shutter-alt">uil-shutter-alt</option>
                                        <option value="uil uil-clapper-board" data-icon="uil uil-clapper-board">uil-clapper-board</option>
                                        <option value="uil uil-water" data-icon="uil uil-water">uil-water</option>
                                        <option value="uil uil-rainbow" data-icon="uil uil-rainbow">uil-rainbow</option>
                                        <option value="uil uil-desert" data-icon="uil uil-desert">uil-desert</option>
                                        <option value="uil uil-sunset" data-icon="uil uil-sunset">uil-sunset</option>
                                        <option value="uil uil-mountains" data-icon="uil uil-mountains">uil-mountains</option>
                                        <option value="uil uil-bolt-slash" data-icon="uil uil-bolt-slash">uil-bolt-slash</option>
                                        <option value="uil uil-telescope" data-icon="uil uil-telescope">uil-telescope</option>
                                        <option value="uil uil-sperms" data-icon="uil uil-sperms">uil-sperms</option>
                                        <option value="uil uil-game-structure" data-icon="uil uil-game-structure">uil-game-structure</option>
                                        <option value="uil uil-ticket" data-icon="uil uil-ticket">uil-ticket</option>
                                        <option value="uil uil-presentation-play" data-icon="uil uil-presentation-play">uil-presentation-play</option>
                                        <option value="uil uil-book-open" data-icon="uil uil-book-open">uil-book-open</option>
                                        <option value="uil uil-notebooks" data-icon="uil uil-notebooks">uil-notebooks</option>
                                        <option value="uil uil-award-alt" data-icon="uil uil-award-alt">uil-award-alt</option>
                                        <option value="uil uil-bug" data-icon="uil uil-bug">uil-bug</option>
                                        <option value="uil uil-browser" data-icon="uil uil-browser">uil-browser</option>
                                        <option value="uil uil-rss-alt" data-icon="uil uil-rss-alt">uil-rss-alt</option>
                                        <option value="uil uil-building" data-icon="uil uil-building">uil-building</option>
                                        <option value="uil uil-lamp" data-icon="uil uil-lamp">uil-lamp</option>
                                        <option value="uil uil-heart-rate" data-icon="uil uil-heart-rate">uil-heart-rate</option>
                                        <option value="uil uil-swimmer" data-icon="uil uil-swimmer">uil-swimmer</option>
                                        <option value="uil uil-pump" data-icon="uil uil-pump">uil-pump</option>
                                        <option value="uil uil-crockery" data-icon="uil uil-crockery">uil-crockery</option>
                                        <option value="uil uil-message" data-icon="uil uil-message">uil-message</option>
                                        <option value="uil uil-bed-double" data-icon="uil uil-bed-double">uil-bed-double</option>
                                        <option value="uil uil-rope-way" data-icon="uil uil-rope-way">uil-rope-way</option>
                                        <option value="uil uil-water-glass" data-icon="uil uil-water-glass">uil-water-glass</option>
                                        <option value="uil uil-rotate-360" data-icon="uil uil-rotate-360">uil-rotate-360</option>
                                        <option value="uil uil-feedback" data-icon="uil uil-feedback">uil-feedback</option>
                                        <option value="uil uil-bed" data-icon="uil uil-bed">uil-bed</option>
                                        <option value="uil uil-utensils" data-icon="uil uil-utensils">uil-utensils</option>
                                        <option value="uil uil-align-center-h" data-icon="uil uil-align-center-h">uil-align-center-h</option>
                                        <option value="uil uil-baby-carriage" data-icon="uil uil-baby-carriage">uil-baby-carriage</option>
                                        <option value="uil uil-post-stamp" data-icon="uil uil-post-stamp">uil-post-stamp</option>
                                        <option value="uil uil-arrow-growth" data-icon="uil uil-arrow-growth">uil-arrow-growth</option>
                                        <option value="uil uil-enter" data-icon="uil uil-enter">uil-enter</option>
                                        <option value="uil uil-arrow" data-icon="uil uil-arrow">uil-arrow</option>
                                        <option value="uil uil-arrows-shrink-h" data-icon="uil uil-arrows-shrink-h">uil-arrows-shrink-h</option>
                                        <option value="uil uil-arrows-resize" data-icon="uil uil-arrows-resize">uil-arrows-resize</option>
                                        <option value="uil uil-presentation" data-icon="uil uil-presentation">uil-presentation</option>
                                        <option value="uil uil-arrows-h" data-icon="uil uil-arrows-h">uil-arrows-h</option>
                                        <option value="uil uil-scaling-right" data-icon="uil uil-scaling-right">uil-scaling-right</option>
                                        <option value="uil uil-import" data-icon="uil uil-import">uil-import</option>
                                        <option value="uil uil-arrow-circle-down" data-icon="uil uil-arrow-circle-down">uil-arrow-circle-down</option>
                                        <option value="uil uil-angle-double-down" data-icon="uil uil-angle-double-down">uil-angle-double-down</option>
                                        <option value="uil uil-chart-down" data-icon="uil uil-chart-down">uil-chart-down</option>
                                        <option value="uil uil-angle-down" data-icon="uil uil-angle-down">uil-angle-down</option>
                                        <option value="uil uil-expand-left" data-icon="uil uil-expand-left">uil-expand-left</option>
                                        <option value="uil uil-arrow-resize-diagonal" data-icon="uil uil-arrow-resize-diagonal">uil-arrow-resize-diagonal</option>
                                        <option value="uil uil-exchange-alt" data-icon="uil uil-exchange-alt">uil-exchange-alt</option>
                                        <option value="uil uil-angle-double-left" data-icon="uil uil-angle-double-left">uil-angle-double-left</option>
                                        <option value="uil uil-expand-alt" data-icon="uil uil-expand-alt">uil-expand-alt</option>
                                        <option value="uil uil-compress-arrows" data-icon="uil uil-compress-arrows">uil-compress-arrows</option>
                                        <option value="uil uil-caret-right" data-icon="uil uil-caret-right">uil-caret-right</option>
                                        <option value="uil uil-scroll-h" data-icon="uil uil-scroll-h">uil-scroll-h</option>
                                        <option value="uil uil-angle-double-right" data-icon="uil uil-angle-double-right">uil-angle-double-right</option>
                                        <option value="uil uil-arrow-to-bottom" data-icon="uil uil-arrow-to-bottom">uil-arrow-to-bottom</option>
                                        <option value="uil uil-sort" data-icon="uil uil-sort">uil-sort</option>
                                        <option value="uil uil-scaling-left" data-icon="uil uil-scaling-left">uil-scaling-left</option>
                                        <option value="uil uil-arrows-resize-h" data-icon="uil uil-arrows-resize-h">uil-arrows-resize-h</option>
                                        <option value="uil uil-arrow-from-top" data-icon="uil uil-arrow-from-top">uil-arrow-from-top</option>
                                        <option value="uil uil-arrows-up-right" data-icon="uil uil-arrows-up-right">uil-arrows-up-right</option>
                                        <option value="uil uil-arrows-left-down" data-icon="uil uil-arrows-left-down">uil-arrows-left-down</option>
                                        <option value="uil uil-arrows-right-down" data-icon="uil uil-arrows-right-down">uil-arrows-right-down</option>
                                        <option value="uil uil-arrows-h-alt" data-icon="uil uil-arrows-h-alt">uil-arrows-h-alt</option>
                                        <option value="uil uil-download-alt" data-icon="uil uil-download-alt">uil-download-alt</option>
                                        <option value="uil uil-compress-point" data-icon="uil uil-compress-point">uil-compress-point</option>
                                        <option value="uil uil-arrow-up-left" data-icon="uil uil-arrow-up-left">uil-arrow-up-left</option>
                                        <option value="uil uil-arrow-compress-h" data-icon="uil uil-arrow-compress-h">uil-arrow-compress-h</option>
                                        <option value="uil uil-arrows-v-alt" data-icon="uil uil-arrows-v-alt">uil-arrows-v-alt</option>
                                        <option value="uil uil-arrows-v" data-icon="uil uil-arrows-v">uil-arrows-v</option>
                                        <option value="uil uil-arrows-shrink-v" data-icon="uil uil-arrows-shrink-v">uil-arrows-shrink-v</option>
                                        <option value="uil uil-arrow-break" data-icon="uil uil-arrow-break">uil-arrow-break</option>
                                        <option value="uil uil-align-center-v" data-icon="uil uil-align-center-v">uil-align-center-v</option>
                                        <option value="uil uil-angle-up" data-icon="uil uil-angle-up">uil-angle-up</option>
                                        <option value="uil uil-arrow-circle-up" data-icon="uil uil-arrow-circle-up">uil-arrow-circle-up</option>
                                        <option value="uil uil-export" data-icon="uil uil-export">uil-export</option>
                                        <option value="uil uil-arrows-resize-v" data-icon="uil uil-arrows-resize-v">uil-arrows-resize-v</option>
                                        <option value="uil uil-upload-alt" data-icon="uil uil-upload-alt">uil-upload-alt</option>
                                        <option value="uil uil-arrow-up-right" data-icon="uil uil-arrow-up-right">uil-arrow-up-right</option>
                                        <option value="uil uil-corner-up-right" data-icon="uil uil-corner-up-right">uil-corner-up-right</option>
                                        <option value="uil uil-angle-double-up" data-icon="uil uil-angle-double-up">uil-angle-double-up</option>
                                        <option value="uil uil-sorting" data-icon="uil uil-sorting">uil-sorting</option>
                                        <option value="uil uil-exchange" data-icon="uil uil-exchange">uil-exchange</option>
                                        <option value="uil uil-corner-down-left" data-icon="uil uil-corner-down-left">uil-corner-down-left</option>
                                        <option value="uil uil-corner-right-down" data-icon="uil uil-corner-right-down">uil-corner-right-down</option>
                                        <option value="uil uil-corner-down-right" data-icon="uil uil-corner-down-right">uil-corner-down-right</option>
                                        <option value="uil uil-corner-up-left" data-icon="uil uil-corner-up-left">uil-corner-up-left</option>
                                        <option value="uil uil-corner-left-down" data-icon="uil uil-corner-left-down">uil-corner-left-down</option>
                                        <option value="uil uil-maximize-left" data-icon="uil uil-maximize-left">uil-maximize-left</option>
                                        <option value="uil uil-corner-up-right-alt" data-icon="uil uil-corner-up-right-alt">uil-corner-up-right-alt</option>
                                        <option value="uil uil-corner-down-right-alt" data-icon="uil uil-corner-down-right-alt">uil-corner-down-right-alt</option>
                                        <option value="uil uil-top-arrow-from-top" data-icon="uil uil-top-arrow-from-top">uil-top-arrow-from-top</option>
                                        <option value="uil uil-top-arrow-to-top" data-icon="uil uil-top-arrow-to-top">uil-top-arrow-to-top</option>
                                        <option value="uil uil-arrow-random" data-icon="uil uil-arrow-random">uil-arrow-random</option>
                                        <option value="uil uil-shuffle" data-icon="uil uil-shuffle">uil-shuffle</option>
                                        <option value="uil uil-direction" data-icon="uil uil-direction">uil-direction</option>
                                        <option value="uil uil-angle-right" data-icon="uil uil-angle-right">uil-angle-right</option>
                                        <option value="uil uil-arrow-circle-right" data-icon="uil uil-arrow-circle-right">uil-arrow-circle-right</option>
                                        <option value="uil uil-arrow-to-right" data-icon="uil uil-arrow-to-right">uil-arrow-to-right</option>
                                        <option value="uil uil-arrow-from-right" data-icon="uil uil-arrow-from-right">uil-arrow-from-right</option>
                                        <option value="uil uil-expand-from-corner" data-icon="uil uil-expand-from-corner">uil-expand-from-corner</option>
                                        <option value="uil uil-expand-arrows" data-icon="uil uil-expand-arrows">uil-expand-arrows</option>
                                        <option value="uil uil-arrows-maximize" data-icon="uil uil-arrows-maximize">uil-arrows-maximize</option>
                                        <option value="uil uil-arrow-down-left" data-icon="uil uil-arrow-down-left">uil-arrow-down-left</option>
                                        <option value="uil uil-expand-arrows-alt" data-icon="uil uil-expand-arrows-alt">uil-expand-arrows-alt</option>
                                        <option value="uil uil-compress-alt" data-icon="uil uil-compress-alt">uil-compress-alt</option>
                                        <option value="uil uil-scroll" data-icon="uil uil-scroll">uil-scroll</option>
                                        <option value="uil uil-arrow-circle-left" data-icon="uil uil-arrow-circle-left">uil-arrow-circle-left</option>
                                        <option value="uil uil-angle-left" data-icon="uil uil-angle-left">uil-angle-left</option>
                                        <option value="uil uil-arrows-merge" data-icon="uil uil-arrows-merge">uil-arrows-merge</option>
                                        <option value="uil uil-arrow-down-right" data-icon="uil uil-arrow-down-right">uil-arrow-down-right</option>
                                        <option value="uil uil-corner-up-left-alt" data-icon="uil uil-corner-up-left-alt">uil-corner-up-left-alt</option>
                                        <option value="uil uil-left-arrow-to-left" data-icon="uil uil-left-arrow-to-left">uil-left-arrow-to-left</option>
                                        <option value="uil uil-minus-path" data-icon="uil uil-minus-path">uil-minus-path</option>
                                        <option value="uil uil-left-arrow-from-left" data-icon="uil uil-left-arrow-from-left">uil-left-arrow-from-left</option>
                                        <option value="uil uil-repeat" data-icon="uil uil-repeat">uil-repeat</option>
                                        <option value="uil uil-th-large" data-icon="uil uil-th-large">uil-th-large</option>
                                        <option value="uil uil-line-spacing" data-icon="uil uil-line-spacing">uil-line-spacing</option>
                                        <option value="uil uil-shrink" data-icon="uil uil-shrink">uil-shrink</option>
                                        <option value="uil uil-compress-alt-left" data-icon="uil uil-compress-alt-left">uil-compress-alt-left</option>
                                        <option value="uil uil-bring-front" data-icon="uil uil-bring-front">uil-bring-front</option>
                                        <option value="uil uil-compress-lines" data-icon="uil uil-compress-lines">uil-compress-lines</option>
                                        <option value="uil uil-bring-bottom" data-icon="uil uil-bring-bottom">uil-bring-bottom</option>
                                        <option value="uil uil-compress-v" data-icon="uil uil-compress-v">uil-compress-v</option>
                                        <option value="uil uil-spin" data-icon="uil uil-spin">uil-spin</option>
                                        <option value="uil uil-border-out" data-icon="uil uil-border-out">uil-border-out</option>
                                        <option value="uil uil-border-horizontal" data-icon="uil uil-border-horizontal">uil-border-horizontal</option>
                                        <option value="uil uil-document-layout-left" data-icon="uil uil-document-layout-left">uil-document-layout-left</option>
                                        <option value="uil uil-compress" data-icon="uil uil-compress">uil-compress</option>
                                        <option value="uil uil-grip-horizontal-line" data-icon="uil uil-grip-horizontal-line">uil-grip-horizontal-line</option>
                                        <option value="uil uil-dialpad-alt" data-icon="uil uil-dialpad-alt">uil-dialpad-alt</option>
                                        <option value="uil uil-document-layout-center" data-icon="uil uil-document-layout-center">uil-document-layout-center</option>
                                        <option value="uil uil-border-bottom" data-icon="uil uil-border-bottom">uil-border-bottom</option>
                                        <option value="uil uil-dialpad" data-icon="uil uil-dialpad">uil-dialpad</option>
                                        <option value="uil uil-document-layout-right" data-icon="uil uil-document-layout-right">uil-document-layout-right</option>
                                        <option value="uil uil-align-center" data-icon="uil uil-align-center">uil-align-center</option>
                                        <option value="uil uil-sort-amount-down" data-icon="uil uil-sort-amount-down">uil-sort-amount-down</option>
                                        <option value="uil uil-align-center-alt" data-icon="uil uil-align-center-alt">uil-align-center-alt</option>
                                        <option value="uil uil-align-letter-right" data-icon="uil uil-align-letter-right">uil-align-letter-right</option>
                                        <option value="uil uil-border-alt" data-icon="uil uil-border-alt">uil-border-alt</option>
                                        <option value="uil uil-align-center-justify" data-icon="uil uil-align-center-justify">uil-align-center-justify</option>
                                        <option value="uil uil-align-alt" data-icon="uil uil-align-alt">uil-align-alt</option>
                                        <option value="uil uil-border-vertical" data-icon="uil uil-border-vertical">uil-border-vertical</option>
                                        <option value="uil uil-sort-amount-up" data-icon="uil uil-sort-amount-up">uil-sort-amount-up</option>
                                        <option value="uil uil-wrap-text" data-icon="uil uil-wrap-text">uil-wrap-text</option>
                                        <option value="uil uil-align-left-justify" data-icon="uil uil-align-left-justify">uil-align-left-justify</option>
                                        <option value="uil uil-angle-right-b" data-icon="uil uil-angle-right-b">uil-angle-right-b</option>
                                        <option value="uil uil-paragraph" data-icon="uil uil-paragraph">uil-paragraph</option>
                                        <option value="uil uil-right-indent-alt" data-icon="uil uil-right-indent-alt">uil-right-indent-alt</option>
                                        <option value="uil uil-border-right" data-icon="uil uil-border-right">uil-border-right</option>
                                        <option value="uil uil-align-right-justify" data-icon="uil uil-align-right-justify">uil-align-right-justify</option>
                                        <option value="uil uil-align" data-icon="uil uil-align">uil-align</option>
                                        <option value="uil uil-border-clear" data-icon="uil uil-border-clear">uil-border-clear</option>
                                        <option value="uil uil-align-right" data-icon="uil uil-align-right">uil-align-right</option>
                                        <option value="uil uil-list-ui-alt" data-icon="uil uil-list-ui-alt">uil-list-ui-alt</option>
                                        <option value="uil uil-left-indent" data-icon="uil uil-left-indent">uil-left-indent</option>
                                        <option value="uil uil-left-indent-alt" data-icon="uil uil-left-indent-alt">uil-left-indent-alt</option>
                                        <option value="uil uil-border-left" data-icon="uil uil-border-left">uil-border-left</option>
                                        <option value="uil uil-border-top" data-icon="uil uil-border-top">uil-border-top</option>
                                        <option value="uil uil-align-justify" data-icon="uil uil-align-justify">uil-align-justify</option>
                                        <option value="uil uil-subject" data-icon="uil uil-subject">uil-subject</option>
                                        <option value="uil uil-bars" data-icon="uil uil-bars">uil-bars</option>
                                        <option value="uil uil-eye" data-icon="uil uil-eye">uil-eye</option>
                                        <option value="uil uil-exposure-increase" data-icon="uil uil-exposure-increase">uil-exposure-increase</option>
                                        <option value="uil uil-bright" data-icon="uil uil-bright">uil-bright</option>
                                        <option value="uil uil-exposure-alt" data-icon="uil uil-exposure-alt">uil-exposure-alt</option>
                                        <option value="uil uil-capture" data-icon="uil uil-capture">uil-capture</option>
                                        <option value="uil uil-arrow-left" data-icon="uil uil-arrow-left">uil-arrow-left</option>
                                        <option value="uil uil-arrow-right" data-icon="uil uil-arrow-right">uil-arrow-right</option>
                                        <option value="uil uil-arrow-up" data-icon="uil uil-arrow-up">uil-arrow-up</option>
                                        <option value="uil uil-focus-target" data-icon="uil uil-focus-target">uil-focus-target</option>
                                        <option value="uil uil-external-link-alt" data-icon="uil uil-external-link-alt">uil-external-link-alt</option>
                                        <option value="uil uil-card-atm" data-icon="uil uil-card-atm">uil-card-atm</option>
                                        <option value="uil uil-focus-add" data-icon="uil uil-focus-add">uil-focus-add</option>
                                        <option value="uil uil-focus" data-icon="uil uil-focus">uil-focus</option>
                                        <option value="uil uil-border-inner" data-icon="uil uil-border-inner">uil-border-inner</option>
                                        <option value="uil uil-glass-tea" data-icon="uil uil-glass-tea">uil-glass-tea</option>
                                        <option value="uil uil-streering" data-icon="uil uil-streering">uil-streering</option>
                                        <option value="uil uil-tv-retro-slash" data-icon="uil uil-tv-retro-slash">uil-tv-retro-slash</option>
                                        <option value="uil uil-wrench" data-icon="uil uil-wrench">uil-wrench</option>
                                        <option value="uil uil-football-american" data-icon="uil uil-football-american">uil-football-american</option>
                                        <option value="uil uil-water-drop-slash" data-icon="uil uil-water-drop-slash">uil-water-drop-slash</option>
                                        <option value="uil uil-layers" data-icon="uil uil-layers">uil-layers</option>
                                        <option value="uil uil-print-slash" data-icon="uil uil-print-slash">uil-print-slash</option>
                                        <option value="uil uil-android-phone-slash" data-icon="uil uil-android-phone-slash">uil-android-phone-slash</option>
                                        <option value="uil uil-calendar-slash" data-icon="uil uil-calendar-slash">uil-calendar-slash</option>
                                        <option value="uil uil-image-slash" data-icon="uil uil-image-slash">uil-image-slash</option>
                                        <option value="uil uil-image-alt-slash" data-icon="uil uil-image-alt-slash">uil-image-alt-slash</option>
                                        <option value="uil uil-lock-slash" data-icon="uil uil-lock-slash">uil-lock-slash</option>
                                        <option value="uil uil-money-bill-slash" data-icon="uil uil-money-bill-slash">uil-money-bill-slash</option>
                                        <option value="uil uil-comment-slash" data-icon="uil uil-comment-slash">uil-comment-slash</option>
                                        <option value="uil uil-map-marker-slash" data-icon="uil uil-map-marker-slash">uil-map-marker-slash</option>
                                        <option value="uil uil-tear" data-icon="uil uil-tear">uil-tear</option>
                                        <option value="uil uil-comment-alt-slash" data-icon="uil uil-comment-alt-slash">uil-comment-alt-slash</option>
                                        <option value="uil uil-folder-slash" data-icon="uil uil-folder-slash">uil-folder-slash</option>
                                        <option value="uil uil-filter-slash" data-icon="uil uil-filter-slash">uil-filter-slash</option>
                                        <option value="uil uil-file-slash" data-icon="uil uil-file-slash">uil-file-slash</option>
                                        <option value="uil uil-file-lanscape-slash" data-icon="uil uil-file-lanscape-slash">uil-file-lanscape-slash</option>
                                        <option value="uil uil-glass-martini-alt-slash" data-icon="uil uil-glass-martini-alt-slash">uil-glass-martini-alt-slash</option>
                                        <option value="uil uil-car-slash" data-icon="uil uil-car-slash">uil-car-slash</option>
                                        <option value="uil uil-camera-slash" data-icon="uil uil-camera-slash">uil-camera-slash</option>
                                        <option value="uil uil-list-ul" data-icon="uil uil-list-ul">uil-list-ul</option>
                                        <option value="uil uil-layer-group-slash" data-icon="uil uil-layer-group-slash">uil-layer-group-slash</option>
                                        <option value="uil uil-plug" data-icon="uil uil-plug">uil-plug</option>
                                        <option value="uil uil-bell-slash" data-icon="uil uil-bell-slash">uil-bell-slash</option>
                                        <option value="uil uil-expand-right" data-icon="uil uil-expand-right">uil-expand-right</option>
                                        <option value="uil uil-bell" data-icon="uil uil-bell">uil-bell</option>
                                        <option value="uil uil-desktop-alt-slash" data-icon="uil uil-desktop-alt-slash">uil-desktop-alt-slash</option>
                                        <option value="uil uil-align-left" data-icon="uil uil-align-left">uil-align-left</option>
                                        <option value="uil uil-layers-slash" data-icon="uil uil-layers-slash">uil-layers-slash</option>
                                        <option value="uil uil-angry" data-icon="uil uil-angry">uil-angry</option>
                                        <option value="uil uil-ear" data-icon="uil uil-ear">uil-ear</option>
                                        <option value="uil uil-desktop-slash" data-icon="uil uil-desktop-slash">uil-desktop-slash</option>
                                        <option value="uil uil-text-strike-through" data-icon="uil uil-text-strike-through">uil-text-strike-through</option>
                                        <option value="uil uil-bold" data-icon="uil uil-bold">uil-bold</option>
                                        <option value="uil uil-text" data-icon="uil uil-text">uil-text</option>
                                        <option value="uil uil-assistive-listening-systems" data-icon="uil uil-assistive-listening-systems">uil-assistive-listeningoption>span></li>
                                        <option value="uil uil-palette" data-icon="uil uil-palette">uil-palette</option>
                                        <option value="uil uil-underline" data-icon="uil uil-underline">uil-underline</option>
                                        <option value="uil uil-text-fields" data-icon="uil uil-text-fields">uil-text-fields</option>
                                        <option value="uil uil-arrow-down" data-icon="uil uil-arrow-down">uil-arrow-down</option>
                                        <option value="uil uil-text-size" data-icon="uil uil-text-size">uil-text-size</option>
                                        <option value="uil uil-italic" data-icon="uil uil-italic">uil-italic</option>
                                        <option value="uil uil-right-to-left-text-direction" data-icon="uil uil-right-to-left-text-direction">uil-right-to-left-text-doption>span></li>
                                        <option value="uil uil-sigma" data-icon="uil uil-sigma">uil-sigma</option>
                                        <option value="uil uil-12-plus" data-icon="uil uil-12-plus">uil-12-plus</option>
                                        <option value="uil uil-left-to-right-text-direction" data-icon="uil uil-left-to-right-text-direction">uil-left-to-right-text-doption>span></li>
                                        <option value="uil uil-10-plus" data-icon="uil uil-10-plus">uil-10-plus</option>
                                        <option value="uil uil-16-plus" data-icon="uil uil-16-plus">uil-16-plus</option>
                                        <option value="uil uil-13-plus" data-icon="uil uil-13-plus">uil-13-plus</option>
                                        <option value="uil uil-21-plus" data-icon="uil uil-21-plus">uil-21-plus</option>
                                        <option value="uil uil-17-plus" data-icon="uil uil-17-plus">uil-17-plus</option>
                                        <option value="uil uil-6-plus" data-icon="uil uil-6-plus">uil-6-plus</option>
                                        <option value="uil uil-0-plus" data-icon="uil uil-0-plus">uil-0-plus</option>
                                        <option value="uil uil-3-plus" data-icon="uil uil-3-plus">uil-3-plus</option>
                                        <option value="uil uil-eye-slash" data-icon="uil uil-eye-slash">uil-eye-slash</option>
                                        <option value="uil uil-archway" data-icon="uil uil-archway">uil-archway</option>
                                        <option value="uil uil-18-plus" data-icon="uil uil-18-plus">uil-18-plus</option>
                                        <option value="uil uil-robot" data-icon="uil uil-robot">uil-robot</option>
                                        <option value="uil uil-selfie" data-icon="uil uil-selfie">uil-selfie</option>
                                        <option value="uil uil-bag-slash" data-icon="uil uil-bag-slash">uil-bag-slash</option>
                                        <option value="uil uil-instagram" data-icon="uil uil-instagram">uil-instagram</option>
                                        <option value="uil uil-line" data-icon="uil uil-line">uil-line</option>
                                        <option value="uil uil-facebook-messenger" data-icon="uil uil-facebook-messenger">uil-facebook-messenger</option>
                                        <option value="uil uil-facebook-f" data-icon="uil uil-facebook-f">uil-facebook-f</option>
                                        <option value="uil uil-black-berry" data-icon="uil uil-black-berry">uil-black-berry</option>
                                        <option value="uil uil-linkedin" data-icon="uil uil-linkedin">uil-linkedin</option>
                                        <option value="uil uil-snapchat-ghost" data-icon="uil uil-snapchat-ghost">uil-snapchat-ghost</option>
                                        <option value="uil uil-intercom" data-icon="uil uil-intercom">uil-intercom</option>
                                        <option value="uil uil-youtube" data-icon="uil uil-youtube">uil-youtube</option>
                                        <option value="uil uil-snapchat-square" data-icon="uil uil-snapchat-square">uil-snapchat-square</option>
                                        <option value="uil uil-apple" data-icon="uil uil-apple">uil-apple</option>
                                        <option value="uil uil-instagram-alt" data-icon="uil uil-instagram-alt">uil-instagram-alt</option>
                                        <option value="uil uil-whatsapp-alt" data-icon="uil uil-whatsapp-alt">uil-whatsapp-alt</option>
                                        <option value="uil uil-behance" data-icon="uil uil-behance">uil-behance</option>
                                        <option value="uil uil-twitter" data-icon="uil uil-twitter">uil-twitter</option>
                                        <option value="uil uil-500px" data-icon="uil uil-500px">uil-500px</option>
                                        <option value="uil uil-tumblr" data-icon="uil uil-tumblr">uil-tumblr</option>
                                        <option value="uil uil-github-alt" data-icon="uil uil-github-alt">uil-github-alt</option>
                                        <option value="uil uil-tumblr-square" data-icon="uil uil-tumblr-square">uil-tumblr-square</option>
                                        <option value="uil uil-google" data-icon="uil uil-google">uil-google</option>
                                        <option value="uil uil-medium-m" data-icon="uil uil-medium-m">uil-medium-m</option>
                                        <option value="uil uil-slack" data-icon="uil uil-slack">uil-slack</option>
                                        <option value="uil uil-paypal" data-icon="uil uil-paypal">uil-paypal</option>
                                        <option value="uil uil-reddit-alien-alt" data-icon="uil uil-reddit-alien-alt">uil-reddit-alien-alt</option>
                                        <option value="uil uil-linkedin-alt" data-icon="uil uil-linkedin-alt">uil-linkedin-alt</option>
                                        <option value="uil uil-google-hangouts" data-icon="uil uil-google-hangouts">uil-google-hangouts</option>
                                        <option value="uil uil-java-script" data-icon="uil uil-java-script">uil-java-script</option>
                                        <option value="uil uil-google-play" data-icon="uil uil-google-play">uil-google-play</option>
                                        <option value="uil uil-google-drive" data-icon="uil uil-google-drive">uil-google-drive</option>
                                        <option value="uil uil-asterisk" data-icon="uil uil-asterisk">uil-asterisk</option>
                                        <option value="uil uil-android" data-icon="uil uil-android">uil-android</option>
                                        <option value="uil uil-github" data-icon="uil uil-github">uil-github</option>
                                        <option value="uil uil-balance-scale" data-icon="uil uil-balance-scale">uil-balance-scale</option>
                                        <option value="uil uil-amazon" data-icon="uil uil-amazon">uil-amazon</option>
                                        <option value="uil uil-slack-alt" data-icon="uil uil-slack-alt">uil-slack-alt</option>
                                        <option value="uil uil-dashboard" data-icon="uil uil-dashboard">uil-dashboard</option>
                                        <option value="uil uil-vuejs-alt" data-icon="uil uil-vuejs-alt">uil-vuejs-alt</option>
                                        <option value="uil uil-adobe-alt" data-icon="uil uil-adobe-alt">uil-adobe-alt</option>
                                        <option value="uil uil-ankh" data-icon="uil uil-ankh">uil-ankh</option>
                                        <option value="uil uil-twitter-alt" data-icon="uil uil-twitter-alt">uil-twitter-alt</option>
                                        <option value="uil uil-opera" data-icon="uil uil-opera">uil-opera</option>
                                        <option value="uil uil-intercom-alt" data-icon="uil uil-intercom-alt">uil-intercom-alt</option>
                                        <option value="uil uil-tumblr-alt" data-icon="uil uil-tumblr-alt">uil-tumblr-alt</option>
                                        <option value="uil uil-react" data-icon="uil uil-react">uil-react</option>
                                        <option value="uil uil-camera-change" data-icon="uil uil-camera-change">uil-camera-change</option>
                                        <option value="uil uil-master-card" data-icon="uil uil-master-card">uil-master-card</option>
                                        <option value="uil uil-snapchat-alt" data-icon="uil uil-snapchat-alt">uil-snapchat-alt</option>
                                        <option value="uil uil-opera-alt" data-icon="uil uil-opera-alt">uil-opera-alt</option>
                                        <option value="uil uil-html3-alt" data-icon="uil uil-html3-alt">uil-html3-alt</option>
                                        <option value="uil uil-swiggy" data-icon="uil uil-swiggy">uil-swiggy</option>
                                        <option value="uil uil-html3" data-icon="uil uil-html3">uil-html3</option>
                                        <option value="uil uil-google-hangouts-alt" data-icon="uil uil-google-hangouts-alt">uil-google-hangouts-alt</option>
                                        <option value="uil uil-adobe" data-icon="uil uil-adobe">uil-adobe</option>
                                        <option value="uil uil-facebook-messenger-alt" data-icon="uil uil-facebook-messenger-alt">uil-facebook-messenger-alt</option>
                                        <option value="uil uil-blogger-alt" data-icon="uil uil-blogger-alt">uil-blogger-alt</option>
                                        <option value="uil uil-blogger" data-icon="uil uil-blogger">uil-blogger</option>
                                        <option value="uil uil-behance-alt" data-icon="uil uil-behance-alt">uil-behance-alt</option>
                                        <option value="uil uil-apple-alt" data-icon="uil uil-apple-alt">uil-apple-alt</option>
                                        <option value="uil uil-bitcoin" data-icon="uil uil-bitcoin">uil-bitcoin</option>
                                        <option value="uil uil-megaphone" data-icon="uil uil-megaphone">uil-megaphone</option>
                                        <option value="uil uil-bitcoin-alt" data-icon="uil uil-bitcoin-alt">uil-bitcoin-alt</option>
                                        <option value="uil uil-bowling-ball" data-icon="uil uil-bowling-ball">uil-bowling-ball</option>
                                        <option value="uil uil-percentage" data-icon="uil uil-percentage">uil-percentage</option>
                                        <option value="uil uil-hourglass" data-icon="uil uil-hourglass">uil-hourglass</option>
                                        <option value="uil uil-process" data-icon="uil uil-process">uil-process</option>
                                        <option value="uil uil-university" data-icon="uil uil-university">uil-university</option>
                                        <option value="uil uil-skype-alt" data-icon="uil uil-skype-alt">uil-skype-alt</option>
                                        <option value="uil uil-wind-sun" data-icon="uil uil-wind-sun">uil-wind-sun</option>
                                        <option value="uil uil-vk-alt" data-icon="uil uil-vk-alt">uil-vk-alt</option>
                                        <option value="uil uil-skype" data-icon="uil uil-skype">uil-skype</option>
                                        <option value="uil uil-telegram-alt" data-icon="uil uil-telegram-alt">uil-telegram-alt</option>
                                        <option value="uil uil-vuejs" data-icon="uil uil-vuejs">uil-vuejs</option>
                                        <option value="uil uil-vk" data-icon="uil uil-vk">uil-vk</option>
                                        <option value="uil uil-telegram" data-icon="uil uil-telegram">uil-telegram</option>
                                        <option value="uil uil-yin-yang" data-icon="uil uil-yin-yang">uil-yin-yang</option>
                                        <option value="uil uil-angle-left-b" data-icon="uil uil-angle-left-b">uil-angle-left-b</option>
                                        <option value="uil uil-bath" data-icon="uil uil-bath">uil-bath</option>
                                        <option value="uil uil-metro" data-icon="uil uil-metro">uil-metro</option>
                                        <option value="uil uil-comment-add" data-icon="uil uil-comment-add">uil-comment-add</option>
                                        <option value="uil uil-fire" data-icon="uil uil-fire">uil-fire</option>
                                        <option value="uil uil-qrcode-scan" data-icon="uil uil-qrcode-scan">uil-qrcode-scan</option>
                                        <option value="uil uil-panel-add" data-icon="uil uil-panel-add">uil-panel-add</option>
                                        <option value="uil uil-brackets-curly" data-icon="uil uil-brackets-curly">uil-brackets-curly</option>
                                        <option value="uil uil-folder-open" data-icon="uil uil-folder-open">uil-folder-open</option>
                                        <option value="uil uil-comparison" data-icon="uil uil-comparison">uil-comparison</option>
                                        <option value="uil uil-file-export" data-icon="uil uil-file-export">uil-file-export</option>
                                        <option value="uil uil-channel-add" data-icon="uil uil-channel-add">uil-channel-add</option>
                                        <option value="uil uil-rupee-sign" data-icon="uil uil-rupee-sign">uil-rupee-sign</option>
                                        <option value="uil uil-channel" data-icon="uil uil-channel">uil-channel</option>
                                        <option value="uil uil-link-add" data-icon="uil uil-link-add">uil-link-add</option>
                                        <option value="uil uil-file-import" data-icon="uil uil-file-import">uil-file-import</option>
                                        <option value="uil uil-x" data-icon="uil uil-x">uil-x</option>
                                        <option value="uil uil-save" data-icon="uil uil-save">uil-save</option>
                                        <option value="uil uil-heart-break" data-icon="uil uil-heart-break">uil-heart-break</option>
                                        <option value="uil uil-tachometer-fast-alt" data-icon="uil uil-tachometer-fast-alt">uil-tachometer-fast-alt</option>
                                        <option value="uil uil-facebook" data-icon="uil uil-facebook">uil-facebook</option>
                                        <option value="uil uil-create-dashboard" data-icon="uil uil-create-dashboard">uil-create-dashboard</option>
                                        <option value="uil uil-whatsapp" data-icon="uil uil-whatsapp">uil-whatsapp</option>
                                        <option value="uil uil-setting" data-icon="uil uil-setting">uil-setting</option>
                                        <option value="uil uil-rocket" data-icon="uil uil-rocket">uil-rocket</option>
                                        <option value="uil uil-share" data-icon="uil uil-share">uil-share</option>
                                        <option value="uil uil-x-add" data-icon="uil uil-x-add">uil-x-add</option>
                                        <option value="uil uil-user-nurse" data-icon="uil uil-user-nurse">uil-user-nurse</option>
                                        <option value="uil uil-microscope" data-icon="uil uil-microscope">uil-microscope</option>
                                        <option value="uil uil-virus-slash" data-icon="uil uil-virus-slash">uil-virus-slash</option>
                                        <option value="uil uil-visual-studio" data-icon="uil uil-visual-studio">uil-visual-studio</option>
                                        <option value="uil uil-head-side-mask" data-icon="uil uil-head-side-mask">uil-head-side-mask</option>
                                        <option value="uil uil-baseball-ball" data-icon="uil uil-baseball-ball">uil-baseball-ball</option>
                                        <option value="uil uil-stethoscope-alt" data-icon="uil uil-stethoscope-alt">uil-stethoscope-alt</option>
                                        <option value="uil uil-hospital-symbol" data-icon="uil uil-hospital-symbol">uil-hospital-symbol</option>
                                        <option value="uil uil-hospital-square-sign" data-icon="uil uil-hospital-square-sign">uil-hospital-square-sign</option>
                                        <option value="uil uil-head-side" data-icon="uil uil-head-side">uil-head-side</option>
                                        <option value="uil uil-head-side-cough" data-icon="uil uil-head-side-cough">uil-head-side-cough</option>
                                        <option value="uil uil-clinic-medical" data-icon="uil uil-clinic-medical">uil-clinic-medical</option>
                                        <option value="uil uil-wind-moon" data-icon="uil uil-wind-moon">uil-wind-moon</option>
                                        <option value="uil uil-hospital" data-icon="uil uil-hospital">uil-hospital</option>
                                        <option value="uil uil-stethoscope" data-icon="uil uil-stethoscope">uil-stethoscope</option>
                                        <option value="uil uil-sanitizer" data-icon="uil uil-sanitizer">uil-sanitizer</option>
                                        <option value="uil uil-toilet-paper" data-icon="uil uil-toilet-paper">uil-toilet-paper</option>
                                        <option value="uil uil-coronavirus" data-icon="uil uil-coronavirus">uil-coronavirus</option>
                                        <option value="uil uil-user-arrows" data-icon="uil uil-user-arrows">uil-user-arrows</option>
                                        <option value="uil uil-house-user" data-icon="uil uil-house-user">uil-house-user</option>
                                        <option value="uil uil-social-distancing" data-icon="uil uil-social-distancing">uil-social-distancing</option>
                                        <option value="uil uil-credit-card-search" data-icon="uil uil-credit-card-search">uil-credit-card-search</option>
                                        <option value="uil uil-android-alt" data-icon="uil uil-android-alt">uil-android-alt</option>
                                        <option value="uil uil-shield-plus" data-icon="uil uil-shield-plus">uil-shield-plus</option>
                                        <option value="uil uil-user-md" data-icon="uil uil-user-md">uil-user-md</option>
                                        <option value="uil uil-transaction" data-icon="uil uil-transaction">uil-transaction</option>
                                        <option value="uil uil-store-slash" data-icon="uil uil-store-slash">uil-store-slash</option>
                                        <option value="uil uil-code-branch" data-icon="uil uil-code-branch">uil-code-branch</option>
                                        <option value="uil uil-google-drive-alt" data-icon="uil uil-google-drive-alt">uil-google-drive-alt</option>
                                        <option value="uil uil-envelope-block" data-icon="uil uil-envelope-block">uil-envelope-block</option>
                                        <option value="uil uil-mailbox-alt" data-icon="uil uil-mailbox-alt">uil-mailbox-alt</option>
                                        <option value="uil uil-signout" data-icon="uil uil-signout">uil-signout</option>
                                        <option value="uil uil-slider-h" data-icon="uil uil-slider-h">uil-slider-h</option>
                                        <option value="uil uil-lira-sign" data-icon="uil uil-lira-sign">uil-lira-sign</option>
                                        <option value="uil uil-slider-h-range" data-icon="uil uil-slider-h-range">uil-slider-h-range</option>
                                        <option value="uil uil-file-graph" data-icon="uil uil-file-graph">uil-file-graph</option>
                                        <option value="uil uil-wordpress-simple" data-icon="uil uil-wordpress-simple">uil-wordpress-simple</option>
                                        <option value="uil uil-bing" data-icon="uil uil-bing">uil-bing</option>
                                        <option value="uil uil-wordpress" data-icon="uil uil-wordpress">uil-wordpress</option>
                                        <option value="uil uil-html5" data-icon="uil uil-html5">uil-html5</option>
                                        <option value="uil uil-programming-language" data-icon="uil uil-programming-language">uil-programming-language</option>
                                        <option value="uil uil-css3-simple" data-icon="uil uil-css3-simple">uil-css3-simple</option>
                                        <option value="uil uil-html5-alt" data-icon="uil uil-html5-alt">uil-html5-alt</option>
                                        <option value="uil uil-discord" data-icon="uil uil-discord">uil-discord</option>
                                        <option value="uil uil-draggabledots" data-icon="uil uil-draggabledots">uil-draggabledots</option>
                                        <option value="uil uil-font" data-icon="uil uil-font">uil-font</option>
                                        <option value="uil uil-video-question" data-icon="uil uil-video-question">uil-video-question</option>
                                        <option value="uil uil-headphone-slash" data-icon="uil uil-headphone-slash">uil-headphone-slash</option>
                                        <option value="uil uil-info" data-icon="uil uil-info">uil-info</option>
                                        <option value="uil uil-letter-chinese-a" data-icon="uil uil-letter-chinese-a">uil-letter-chinese-a</option>
                                        <option value="uil uil-letter-hindi-a" data-icon="uil uil-letter-hindi-a">uil-letter-hindi-a</option>
                                        <option value="uil uil-english-to-chinese" data-icon="uil uil-english-to-chinese">uil-english-to-chinese</option>
                                        <option value="uil uil-question" data-icon="uil uil-question">uil-question</option>
                                        <option value="uil uil-letter-english-a" data-icon="uil uil-letter-english-a">uil-letter-english-a</option>
                                        <option value="uil uil-hindi-to-chinese" data-icon="uil uil-hindi-to-chinese">uil-hindi-to-chinese</option>
                                        <option value="uil uil-inbox" data-icon="uil uil-inbox">uil-inbox</option>
                                        <option value="uil uil-letter-japanese-a" data-icon="uil uil-letter-japanese-a">uil-letter-japanese-a</option>
                                        <option value="uil uil-exclamation" data-icon="uil uil-exclamation">uil-exclamation</option>
                                        <option value="uil uil-language" data-icon="uil uil-language">uil-language</option>
                                        <option value="uil uil-backspace" data-icon="uil uil-backspace">uil-backspace</option>
                                        <option value="uil uil-window-grid" data-icon="uil uil-window-grid">uil-window-grid</option>
                                        <option value="uil uil-cloud-sun" data-icon="uil uil-cloud-sun">uil-cloud-sun</option>
                                        <option value="uil uil-vertical-align-center" data-icon="uil uil-vertical-align-center">uil-vertical-align-center</option>
                                        <option value="uil uil-raindrops-alt" data-icon="uil uil-raindrops-alt">uil-raindrops-alt</option>
                                        <option value="uil uil-sanitizer-alt" data-icon="uil uil-sanitizer-alt">uil-sanitizer-alt</option>
                                        <option value="uil uil-estate" data-icon="uil uil-estate">uil-estate</option>
                                        <option value="uil uil-file-contract" data-icon="uil uil-file-contract">uil-file-contract</option>
                                        <option value="uil uil-fidget-spinner" data-icon="uil uil-fidget-spinner">uil-fidget-spinner</option>
                                        <option value="uil uil-spinner" data-icon="uil uil-spinner">uil-spinner</option>
                                        <option value="uil uil-spinner-alt" data-icon="uil uil-spinner-alt">uil-spinner-alt</option>
                                        <option value="uil uil-elipsis-double-v-alt" data-icon="uil uil-elipsis-double-v-alt">uil-elipsis-double-v-alt</option>
                                        <option value="uil uil-list-ol" data-icon="uil uil-list-ol">uil-list-ol</option>
                                        <option value="uil uil-list-ol-alt" data-icon="uil uil-list-ol-alt">uil-list-ol-alt</option>
                                        <option value="uil uil-docker" data-icon="uil uil-docker">uil-docker</option>
                                        <option value="uil uil-linux" data-icon="uil uil-linux">uil-linux</option>
                                        <option value="uil uil-hipchat" data-icon="uil uil-hipchat">uil-hipchat</option>
                                        <option value="uil uil-gitlab" data-icon="uil uil-gitlab">uil-gitlab</option>
                                        <option value="uil uil-lottiefiles-alt" data-icon="uil uil-lottiefiles-alt">uil-lottiefiles-alt</option>
                                        <option value="uil uil-pagerduty" data-icon="uil uil-pagerduty">uil-pagerduty</option>
                                        <option value="uil uil-microsoft" data-icon="uil uil-microsoft">uil-microsoft</option>
                                        <option value="uil uil-windows" data-icon="uil uil-windows">uil-windows</option>
                                        <option value="uil uil-pagelines" data-icon="uil uil-pagelines">uil-pagelines</option>
                                        <option value="uil uil-grin" data-icon="uil uil-grin">uil-grin</option>
                                        <option value="uil uil-sad-cry" data-icon="uil uil-sad-cry">uil-sad-cry</option>
                                        <option value="uil uil-sad-crying" data-icon="uil uil-sad-crying">uil-sad-crying</option>
                                        <option value="uil uil-surprise" data-icon="uil uil-surprise">uil-surprise</option>
                                        <option value="uil uil-unamused" data-icon="uil uil-unamused">uil-unamused</option>
                                        <option value="uil uil-confused" data-icon="uil uil-confused">uil-confused</option>
                                        <option value="uil uil-grin-tongue-wink" data-icon="uil uil-grin-tongue-wink">uil-grin-tongue-wink</option>
                                        <option value="uil uil-grin-tongue-wink-alt" data-icon="uil uil-grin-tongue-wink-alt">uil-grin-tongue-wink-alt</option>
                                        <option value="uil uil-kid" data-icon="uil uil-kid">uil-kid</option>
                                        <option value="uil uil-smile-wink-alt" data-icon="uil uil-smile-wink-alt">uil-smile-wink-alt</option>
                                        <option value="uil uil-smile-squint-wink" data-icon="uil uil-smile-squint-wink">uil-smile-squint-wink</option>
                                        <option value="uil uil-annoyed-alt" data-icon="uil uil-annoyed-alt">uil-annoyed-alt</option>
                                        <option value="uil uil-silent-squint" data-icon="uil uil-silent-squint">uil-silent-squint</option>
                                        <option value="uil uil-sick" data-icon="uil uil-sick">uil-sick</option>
                                        <option value="uil uil-shopping-cart-alt" data-icon="uil uil-shopping-cart-alt">uil-shopping-cart-alt</option>
                                        <option value="uil uil-shopping-bag" data-icon="uil uil-shopping-bag">uil-shopping-bag</option>
                                        <option value="uil uil-pricetag-alt" data-icon="uil uil-pricetag-alt">uil-pricetag-alt</option>
                                        <option value="uil uil-shopping-cart" data-icon="uil uil-shopping-cart">uil-shopping-cart</option>
                                        <option value="uil uil-smile-squint-wink-alt" data-icon="uil uil-smile-squint-wink-alt">uil-smile-squint-wink-alt</option>
                                        <option value="uil uil-store-alt" data-icon="uil uil-store-alt">uil-store-alt</option>
                                        <option value="uil uil-emoji" data-icon="uil uil-emoji">uil-emoji</option>
                                        <option value="uil uil-trademark-circle" data-icon="uil uil-trademark-circle">uil-trademark-circle</option>
                                        <option value="uil uil-basketball" data-icon="uil uil-basketball">uil-basketball</option>
                                        <option value="uil uil-square-shape" data-icon="uil uil-square-shape">uil-square-shape</option>
                                        <option value="uil uil-label" data-icon="uil uil-label">uil-label</option>
                                        <option value="uil uil-shopping-basket" data-icon="uil uil-shopping-basket">uil-shopping-basket</option>
                                        <option value="uil uil-smile-wink" data-icon="uil uil-smile-wink">uil-smile-wink</option>
                                        <option value="uil uil-tag" data-icon="uil uil-tag">uil-tag</option>
                                        <option value="uil uil-label-alt" data-icon="uil uil-label-alt">uil-label-alt</option>
                                        <option value="uil uil-tag-alt" data-icon="uil uil-tag-alt">uil-tag-alt</option>
                                        <option value="uil uil-store" data-icon="uil uil-store">uil-store</option>
                                        <option value="uil uil-meh-closed-eye" data-icon="uil uil-meh-closed-eye">uil-meh-closed-eye</option>
                                        <option value="uil uil-trophy" data-icon="uil uil-trophy">uil-trophy</option>
                                        <option value="uil uil-dice-three" data-icon="uil uil-dice-three">uil-dice-three</option>
                                        <option value="uil uil-football-ball" data-icon="uil uil-football-ball">uil-football-ball</option>
                                        <option value="uil uil-basketball-hoop" data-icon="uil uil-basketball-hoop">uil-basketball-hoop</option>
                                        <option value="uil uil-club" data-icon="uil uil-club">uil-club</option>
                                        <option value="uil uil-tennis-ball" data-icon="uil uil-tennis-ball">uil-tennis-ball</option>
                                        <option value="uil uil-football" data-icon="uil uil-football">uil-football</option>
                                        <option value="uil uil-volleyball" data-icon="uil uil-volleyball">uil-volleyball</option>
                                        <option value="uil uil-heart-sign" data-icon="uil uil-heart-sign">uil-heart-sign</option>
                                        <option value="uil uil-spade" data-icon="uil uil-spade">uil-spade</option>
                                        <option value="uil uil-diamond" data-icon="uil uil-diamond">uil-diamond</option>
                                        <option value="uil uil-money-stack" data-icon="uil uil-money-stack">uil-money-stack</option>
                                        <option value="uil uil-money-withdrawal" data-icon="uil uil-money-withdrawal">uil-money-withdrawal</option>
                                        <option value="uil uil-presentation-line" data-icon="uil uil-presentation-line">uil-presentation-line</option>
                                        <option value="uil uil-kayak" data-icon="uil uil-kayak">uil-kayak</option>
                                        <option value="uil uil-chart-pie" data-icon="uil uil-chart-pie">uil-chart-pie</option>
                                        <option value="uil uil-dumbbell" data-icon="uil uil-dumbbell">uil-dumbbell</option>
                                        <option value="uil uil-suitcase-alt" data-icon="uil uil-suitcase-alt">uil-suitcase-alt</option>
                                        <option value="uil uil-yen" data-icon="uil uil-yen">uil-yen</option>
                                        <option value="uil uil-yen-circle" data-icon="uil uil-yen-circle">uil-yen-circle</option>
                                        <option value="uil uil-briefcase-alt" data-icon="uil uil-briefcase-alt">uil-briefcase-alt</option>
                                        <option value="uil uil-receipt" data-icon="uil uil-receipt">uil-receipt</option>
                                        <option value="uil uil-pound" data-icon="uil uil-pound">uil-pound</option>
                                        <option value="uil uil-invoice" data-icon="uil uil-invoice">uil-invoice</option>
                                        <option value="uil uil-pound-circle" data-icon="uil uil-pound-circle">uil-pound-circle</option>
                                        <option value="uil uil-analysis" data-icon="uil uil-analysis">uil-analysis</option>
                                        <option value="uil uil-suitcase" data-icon="uil uil-suitcase">uil-suitcase</option>
                                        <option value="uil uil-moneybag-alt" data-icon="uil uil-moneybag-alt">uil-moneybag-alt</option>
                                        <option value="uil uil-lottiefiles" data-icon="uil uil-lottiefiles">uil-lottiefiles</option>
                                        <option value="uil uil-okta" data-icon="uil uil-okta">uil-okta</option>
                                        <option value="uil uil-illustration" data-icon="uil uil-illustration">uil-illustration</option>
                                        <option value="uil uil-icons" data-icon="uil uil-icons">uil-icons</option>
                                        <option value="uil uil-bag-alt" data-icon="uil uil-bag-alt">uil-bag-alt</option>
                                        <option value="uil uil-moneybag" data-icon="uil uil-moneybag">uil-moneybag</option>
                                        <option value="uil uil-bag" data-icon="uil uil-bag">uil-bag</option>
                                        <option value="uil uil-money-insert" data-icon="uil uil-money-insert">uil-money-insert</option>
                                        <option value="uil uil-chart-line" data-icon="uil uil-chart-line">uil-chart-line</option>
                                        <option value="uil uil-dollar-sign-alt" data-icon="uil uil-dollar-sign-alt">uil-dollar-sign-alt</option>
                                        <option value="uil uil-euro" data-icon="uil uil-euro">uil-euro</option>
                                        <option value="uil uil-usd-circle" data-icon="uil uil-usd-circle">uil-usd-circle</option>
                                        <option value="uil uil-euro-circle" data-icon="uil uil-euro-circle">uil-euro-circle</option>
                                        <option value="uil uil-usd-square" data-icon="uil uil-usd-square">uil-usd-square</option>
                                        <option value="uil uil-money-bill-stack" data-icon="uil uil-money-bill-stack">uil-money-bill-stack</option>
                                        <option value="uil uil-dollar-alt" data-icon="uil uil-dollar-alt">uil-dollar-alt</option>
                                        <option value="uil uil-money-withdraw" data-icon="uil uil-money-withdraw">uil-money-withdraw</option>
                                        <option value="uil uil-credit-card" data-icon="uil uil-credit-card">uil-credit-card</option>
                                        <option value="uil uil-money-bill" data-icon="uil uil-money-bill">uil-money-bill</option>
                                        <option value="uil uil-bitcoin-sign" data-icon="uil uil-bitcoin-sign">uil-bitcoin-sign</option>
                                        <option value="uil uil-signal-alt-3" data-icon="uil uil-signal-alt-3">uil-signal-alt-3</option>
                                        <option value="uil uil-receipt-alt" data-icon="uil uil-receipt-alt">uil-receipt-alt</option>
                                        <option value="uil uil-graph-bar" data-icon="uil uil-graph-bar">uil-graph-bar</option>
                                        <option value="uil uil-analytics" data-icon="uil uil-analytics">uil-analytics</option>
                                        <option value="uil uil-table-tennis" data-icon="uil uil-table-tennis">uil-table-tennis</option>
                                        <option value="uil uil-bill" data-icon="uil uil-bill">uil-bill</option>
                                        <option value="uil uil-chart-bar" data-icon="uil uil-chart-bar">uil-chart-bar</option>
                                        <option value="uil uil-chart-growth" data-icon="uil uil-chart-growth">uil-chart-growth</option>
                                        <option value="uil uil-chart-growth-alt" data-icon="uil uil-chart-growth-alt">uil-chart-growth-alt</option>
                                        <option value="uil uil-shop" data-icon="uil uil-shop">uil-shop</option>
                                        <option value="uil uil-chart-bar-alt" data-icon="uil uil-chart-bar-alt">uil-chart-bar-alt</option>
                                        <option value="uil uil-dollar-sign" data-icon="uil uil-dollar-sign">uil-dollar-sign</option>
                                        <option value="uil uil-chart" data-icon="uil uil-chart">uil-chart</option>
                                        <option value="uil uil-briefcase" data-icon="uil uil-briefcase">uil-briefcase</option>
                                        <option value="uil uil-bitcoin-circle" data-icon="uil uil-bitcoin-circle">uil-bitcoin-circle</option>
                                        <option value="uil uil-chart-pie-alt" data-icon="uil uil-chart-pie-alt">uil-chart-pie-alt</option>
                                        <option value="uil uil-golf-ball" data-icon="uil uil-golf-ball">uil-golf-ball</option>
                                        <option value="uil uil-calculator-alt" data-icon="uil uil-calculator-alt">uil-calculator-alt</option>
                                        <option value="uil uil-coins" data-icon="uil uil-coins">uil-coins</option>
                                        <option value="uil uil-map-pin-alt" data-icon="uil uil-map-pin-alt">uil-map-pin-alt</option>
                                        <option value="uil uil-lightbulb" data-icon="uil uil-lightbulb">uil-lightbulb</option>
                                        <option value="uil uil-map-marker-question" data-icon="uil uil-map-marker-question">uil-map-marker-question</option>
                                        <option value="uil uil-map-marker-shield" data-icon="uil uil-map-marker-shield">uil-map-marker-shield</option>
                                        <option value="uil uil-schedule" data-icon="uil uil-schedule">uil-schedule</option>
                                        <option value="uil uil-calendar-alt" data-icon="uil uil-calendar-alt">uil-calendar-alt</option>
                                        <option value="uil uil-crosshairs" data-icon="uil uil-crosshairs">uil-crosshairs</option>
                                        <option value="uil uil-puzzle-piece" data-icon="uil uil-puzzle-piece">uil-puzzle-piece</option>
                                        <option value="uil uil-gold" data-icon="uil uil-gold">uil-gold</option>
                                        <option value="uil uil-compass" data-icon="uil uil-compass">uil-compass</option>
                                        <option value="uil uil-map" data-icon="uil uil-map">uil-map</option>
                                        <option value="uil uil-location-point" data-icon="uil uil-location-point">uil-location-point</option>
                                        <option value="uil uil-map-marker-info" data-icon="uil uil-map-marker-info">uil-map-marker-info</option>
                                        <option value="uil uil-map-marker-edit" data-icon="uil uil-map-marker-edit">uil-map-marker-edit</option>
                                        <option value="uil uil-map-marker-plus" data-icon="uil uil-map-marker-plus">uil-map-marker-plus</option>
                                        <option value="uil uil-map-pin" data-icon="uil uil-map-pin">uil-map-pin</option>
                                        <option value="uil uil-navigator" data-icon="uil uil-navigator">uil-navigator</option>
                                        <option value="uil uil-location-pin-alt" data-icon="uil uil-location-pin-alt">uil-location-pin-alt</option>
                                        <option value="uil uil-map-marker-minus" data-icon="uil uil-map-marker-minus">uil-map-marker-minus</option>
                                        <option value="uil uil-map-marker-alt" data-icon="uil uil-map-marker-alt">uil-map-marker-alt</option>
                                        <option value="uil uil-sign-left" data-icon="uil uil-sign-left">uil-sign-left</option>
                                        <option value="uil uil-map-marker" data-icon="uil uil-map-marker">uil-map-marker</option>
                                        <option value="uil uil-sign-right" data-icon="uil uil-sign-right">uil-sign-right</option>
                                        <option value="uil uil-directions" data-icon="uil uil-directions">uil-directions</option>
                                        <option value="uil uil-location-arrow" data-icon="uil uil-location-arrow">uil-location-arrow</option>
                                        <option value="uil uil-dna" data-icon="uil uil-dna">uil-dna</option>
                                        <option value="uil uil-sign-alt" data-icon="uil uil-sign-alt">uil-sign-alt</option>
                                        <option value="uil uil-presentation-lines-alt" data-icon="uil uil-presentation-lines-alt">uil-presentation-lines-alt</option>
                                        <option value="uil uil-atom" data-icon="uil uil-atom">uil-atom</option>
                                        <option value="uil uil-flask" data-icon="uil uil-flask">uil-flask</option>
                                        <option value="uil uil-diary" data-icon="uil uil-diary">uil-diary</option>
                                        <option value="uil uil-presentation-times" data-icon="uil uil-presentation-times">uil-presentation-times</option>
                                        <option value="uil uil-diary-alt" data-icon="uil uil-diary-alt">uil-diary-alt</option>
                                        <option value="uil uil-presentation-plus" data-icon="uil uil-presentation-plus">uil-presentation-plus</option>
                                        <option value="uil uil-presentation-minus" data-icon="uil uil-presentation-minus">uil-presentation-minus</option>
                                        <option value="uil uil-presentation-edit" data-icon="uil uil-presentation-edit">uil-presentation-edit</option>
                                        <option value="uil uil-backpack" data-icon="uil uil-backpack">uil-backpack</option>
                                        <option value="uil uil-notes" data-icon="uil uil-notes">uil-notes</option>
                                        <option value="uil uil-location-arrow-alt" data-icon="uil uil-location-arrow-alt">uil-location-arrow-alt</option>
                                        <option value="uil uil-book-alt" data-icon="uil uil-book-alt">uil-book-alt</option>
                                        <option value="uil uil-book" data-icon="uil uil-book">uil-book</option>
                                        <option value="uil uil-medal" data-icon="uil uil-medal">uil-medal</option>
                                        <option value="uil uil-award" data-icon="uil uil-award">uil-award</option>
                                        <option value="uil uil-flask-potion" data-icon="uil uil-flask-potion">uil-flask-potion</option>
                                        <option value="uil uil-bell-school" data-icon="uil uil-bell-school">uil-bell-school</option>
                                        <option value="uil uil-podium" data-icon="uil uil-podium">uil-podium</option>
                                        <option value="uil uil-graduation-cap" data-icon="uil uil-graduation-cap">uil-graduation-cap</option>
                                        <option value="uil uil-medical-square" data-icon="uil uil-medical-square">uil-medical-square</option>
                                        <option value="uil uil-ambulance" data-icon="uil uil-ambulance">uil-ambulance</option>
                                        <option value="uil uil-medical-square-full" data-icon="uil uil-medical-square-full">uil-medical-square-full</option>
                                        <option value="uil uil-cell" data-icon="uil uil-cell">uil-cell</option>
                                        <option value="uil uil-band-aid" data-icon="uil uil-band-aid">uil-band-aid</option>
                                        <option value="uil uil-lightbulb-alt" data-icon="uil uil-lightbulb-alt">uil-lightbulb-alt</option>
                                        <option value="uil uil-wheelchair-alt" data-icon="uil uil-wheelchair-alt">uil-wheelchair-alt</option>
                                        <option value="uil uil-thermometer" data-icon="uil uil-thermometer">uil-thermometer</option>
                                        <option value="uil uil-abacus" data-icon="uil uil-abacus">uil-abacus</option>
                                        <option value="uil uil-syringe" data-icon="uil uil-syringe">uil-syringe</option>
                                        <option value="uil uil-tablets" data-icon="uil uil-tablets">uil-tablets</option>
                                        <option value="uil uil-capsule" data-icon="uil uil-capsule">uil-capsule</option>
                                        <option value="uil uil-stretcher" data-icon="uil uil-stretcher">uil-stretcher</option>
                                        <option value="uil uil-presentation-check" data-icon="uil uil-presentation-check">uil-presentation-check</option>
                                        <option value="uil uil-medkit" data-icon="uil uil-medkit">uil-medkit</option>
                                        <option value="uil uil-meeting-board" data-icon="uil uil-meeting-board">uil-meeting-board</option>
                                        <option value="uil uil-monitor-heart-rate" data-icon="uil uil-monitor-heart-rate">uil-monitor-heart-rate</option>
                                        <option value="uil uil-file-medical-alt" data-icon="uil uil-file-medical-alt">uil-file-medical-alt</option>
                                        <option value="uil uil-heartbeat" data-icon="uil uil-heartbeat">uil-heartbeat</option>
                                        <option value="uil uil-prescription-bottle" data-icon="uil uil-prescription-bottle">uil-prescription-bottle</option>
                                        <option value="uil uil-clock-two" data-icon="uil uil-clock-two">uil-clock-two</option>
                                        <option value="uil uil-medical-drip" data-icon="uil uil-medical-drip">uil-medical-drip</option>
                                        <option value="uil uil-book-medical" data-icon="uil uil-book-medical">uil-book-medical</option>
                                        <option value="uil uil-watch-alt" data-icon="uil uil-watch-alt">uil-watch-alt</option>
                                        <option value="uil uil-stopwatch" data-icon="uil uil-stopwatch">uil-stopwatch</option>
                                        <option value="uil uil-watch" data-icon="uil uil-watch">uil-watch</option>
                                        <option value="uil uil-clock" data-icon="uil uil-clock">uil-clock</option>
                                        <option value="uil uil-clock-seven" data-icon="uil uil-clock-seven">uil-clock-seven</option>
                                        <option value="uil uil-clock-three" data-icon="uil uil-clock-three">uil-clock-three</option>
                                        <option value="uil uil-clock-nine" data-icon="uil uil-clock-nine">uil-clock-nine</option>
                                        <option value="uil uil-clock-ten" data-icon="uil uil-clock-ten">uil-clock-ten</option>
                                        <option value="uil uil-files-landscapes" data-icon="uil uil-files-landscapes">uil-files-landscapes</option>
                                        <option value="uil uil-clock-five" data-icon="uil uil-clock-five">uil-clock-five</option>
                                        <option value="uil uil-brain" data-icon="uil uil-brain">uil-brain</option>
                                        <option value="uil uil-file-plus-alt" data-icon="uil uil-file-plus-alt">uil-file-plus-alt</option>
                                        <option value="uil uil-file-network" data-icon="uil uil-file-network">uil-file-network</option>
                                        <option value="uil uil-file-contract-dollar" data-icon="uil uil-file-contract-dollar">uil-file-contract-dollar</option>
                                        <option value="uil uil-file-upload-alt" data-icon="uil uil-file-upload-alt">uil-file-upload-alt</option>
                                        <option value="uil uil-clock-eight" data-icon="uil uil-clock-eight">uil-clock-eight</option>
                                        <option value="uil uil-clipboard-alt" data-icon="uil uil-clipboard-alt">uil-clipboard-alt</option>
                                        <option value="uil uil-books" data-icon="uil uil-books">uil-books</option>
                                        <option value="uil uil-file-search-alt" data-icon="uil uil-file-search-alt">uil-file-search-alt</option>
                                        <option value="uil uil-file-upload" data-icon="uil uil-file-upload">uil-file-upload</option>
                                        <option value="uil uil-file-share-alt" data-icon="uil uil-file-share-alt">uil-file-share-alt</option>
                                        <option value="uil uil-file-minus-alt" data-icon="uil uil-file-minus-alt">uil-file-minus-alt</option>
                                        <option value="uil uil-folder-minus" data-icon="uil uil-folder-minus">uil-folder-minus</option>
                                        <option value="uil uil-file-shield-alt" data-icon="uil uil-file-shield-alt">uil-file-shield-alt</option>
                                        <option value="uil uil-file-minus" data-icon="uil uil-file-minus">uil-file-minus</option>
                                        <option value="uil uil-folder-medical" data-icon="uil uil-folder-medical">uil-folder-medical</option>
                                        <option value="uil uil-file-redo-alt" data-icon="uil uil-file-redo-alt">uil-file-redo-alt</option>
                                        <option value="uil uil-file-lock-alt" data-icon="uil uil-file-lock-alt">uil-file-lock-alt</option>
                                        <option value="uil uil-folder-lock" data-icon="uil uil-folder-lock">uil-folder-lock</option>
                                        <option value="uil uil-heart-medical" data-icon="uil uil-heart-medical">uil-heart-medical</option>
                                        <option value="uil uil-file-question-alt" data-icon="uil uil-file-question-alt">uil-file-question-alt</option>
                                        <option value="uil uil-files-landscapes-alt" data-icon="uil uil-files-landscapes-alt">uil-files-landscapes-alt</option>
                                        <option value="uil uil-file-medical" data-icon="uil uil-file-medical">uil-file-medical</option>
                                        <option value="uil uil-file-landscape" data-icon="uil uil-file-landscape">uil-file-landscape</option>
                                        <option value="uil uil-file-question" data-icon="uil uil-file-question">uil-file-question</option>
                                        <option value="uil uil-folder-question" data-icon="uil uil-folder-question">uil-folder-question</option>
                                        <option value="uil uil-file-landscape-alt" data-icon="uil uil-file-landscape-alt">uil-file-landscape-alt</option>
                                        <option value="uil uil-folder" data-icon="uil uil-folder">uil-folder</option>
                                        <option value="uil uil-file-edit-alt" data-icon="uil uil-file-edit-alt">uil-file-edit-alt</option>
                                        <option value="uil uil-folder-heart" data-icon="uil uil-folder-heart">uil-folder-heart</option>
                                        <option value="uil uil-folder-exclamation" data-icon="uil uil-folder-exclamation">uil-folder-exclamation</option>
                                        <option value="uil uil-folder-info" data-icon="uil uil-folder-info">uil-folder-info</option>
                                        <option value="uil uil-file-download-alt" data-icon="uil uil-file-download-alt">uil-file-download-alt</option>
                                        <option value="uil uil-file-download" data-icon="uil uil-file-download">uil-file-download</option>
                                        <option value="uil uil-file-copy-alt" data-icon="uil uil-file-copy-alt">uil-file-copy-alt</option>
                                        <option value="uil uil-file-heart" data-icon="uil uil-file-heart">uil-file-heart</option>
                                        <option value="uil uil-file-alt" data-icon="uil uil-file-alt">uil-file-alt</option>
                                        <option value="uil uil-copy-landscape" data-icon="uil uil-copy-landscape">uil-copy-landscape</option>
                                        <option value="uil uil-copy-alt" data-icon="uil uil-copy-alt">uil-copy-alt</option>
                                        <option value="uil uil-folder-upload" data-icon="uil uil-folder-upload">uil-folder-upload</option>
                                        <option value="uil uil-file-exclamation-alt" data-icon="uil uil-file-exclamation-alt">uil-file-exclamation-alt</option>
                                        <option value="uil uil-file-exclamation" data-icon="uil uil-file-exclamation">uil-file-exclamation</option>
                                        <option value="uil uil-copy" data-icon="uil uil-copy">uil-copy</option>
                                        <option value="uil uil-file-blank" data-icon="uil uil-file-blank">uil-file-blank</option>
                                        <option value="uil uil-stopwatch-slash" data-icon="uil uil-stopwatch-slash">uil-stopwatch-slash</option>
                                        <option value="uil uil-file" data-icon="uil uil-file">uil-file</option>
                                        <option value="uil uil-folder-times" data-icon="uil uil-folder-times">uil-folder-times</option>
                                        <option value="uil uil-document-info" data-icon="uil uil-document-info">uil-document-info</option>
                                        <option value="uil uil-file-times" data-icon="uil uil-file-times">uil-file-times</option>
                                        <option value="uil uil-file-info-alt" data-icon="uil uil-file-info-alt">uil-file-info-alt</option>
                                        <option value="uil uil-clipboard-blank" data-icon="uil uil-clipboard-blank">uil-clipboard-blank</option>
                                        <option value="uil uil-clipboard-notes" data-icon="uil uil-clipboard-notes">uil-clipboard-notes</option>
                                        <option value="uil uil-file-times-alt" data-icon="uil uil-file-times-alt">uil-file-times-alt</option>
                                        <option value="uil uil-folder-download" data-icon="uil uil-folder-download">uil-folder-download</option>
                                        <option value="uil uil-file-bookmark-alt" data-icon="uil uil-file-bookmark-alt">uil-file-bookmark-alt</option>
                                        <option value="uil uil-file-block-alt" data-icon="uil uil-file-block-alt">uil-file-block-alt</option>
                                        <option value="uil uil-folder-check" data-icon="uil uil-folder-check">uil-folder-check</option>
                                        <option value="uil uil-file-check" data-icon="uil uil-file-check">uil-file-check</option>
                                        <option value="uil uil-folder-plus" data-icon="uil uil-folder-plus">uil-folder-plus</option>
                                        <option value="uil uil-clipboard" data-icon="uil uil-clipboard">uil-clipboard</option>
                                        <option value="uil uil-file-check-alt" data-icon="uil uil-file-check-alt">uil-file-check-alt</option>
                                        <option value="uil uil-print" data-icon="uil uil-print">uil-print</option>
                                        <option value="uil uil-folder-network" data-icon="uil uil-folder-network">uil-folder-network</option>
                                        <option value="uil uil-desktop-alt" data-icon="uil uil-desktop-alt">uil-desktop-alt</option>
                                        <option value="uil uil-mouse-alt" data-icon="uil uil-mouse-alt">uil-mouse-alt</option>
                                        <option value="uil uil-tablet" data-icon="uil uil-tablet">uil-tablet</option>
                                        <option value="uil uil-desktop" data-icon="uil uil-desktop">uil-desktop</option>
                                        <option value="uil uil-mobile-android-alt" data-icon="uil uil-mobile-android-alt">uil-mobile-android-alt</option>
                                        <option value="uil uil-search-alt" data-icon="uil uil-search-alt">uil-search-alt</option>
                                        <option value="uil uil-volume-up" data-icon="uil uil-volume-up">uil-volume-up</option>
                                        <option value="uil uil-mouse" data-icon="uil uil-mouse">uil-mouse</option>
                                        <option value="uil uil-mouse-alt-2" data-icon="uil uil-mouse-alt-2">uil-mouse-alt-2</option>
                                        <option value="uil uil-mobile-android" data-icon="uil uil-mobile-android">uil-mobile-android</option>
                                        <option value="uil uil-laptop" data-icon="uil uil-laptop">uil-laptop</option>
                                        <option value="uil uil-search-minus" data-icon="uil uil-search-minus">uil-search-minus</option>
                                        <option value="uil uil-bluetooth-b" data-icon="uil uil-bluetooth-b">uil-bluetooth-b</option>
                                        <option value="uil uil-video-slash" data-icon="uil uil-video-slash">uil-video-slash</option>
                                        <option value="uil uil-search-plus" data-icon="uil uil-search-plus">uil-search-plus</option>
                                        <option value="uil uil-tv-retro" data-icon="uil uil-tv-retro">uil-tv-retro</option>
                                        <option value="uil uil-toggle-on" data-icon="uil uil-toggle-on">uil-toggle-on</option>
                                        <option value="uil uil-toggle-off" data-icon="uil uil-toggle-off">uil-toggle-off</option>
                                        <option value="uil uil-traffic-light" data-icon="uil uil-traffic-light">uil-traffic-light</option>
                                        <option value="uil uil-bolt" data-icon="uil uil-bolt">uil-bolt</option>
                                        <option value="uil uil-trash-alt" data-icon="uil uil-trash-alt">uil-trash-alt</option>
                                        <option value="uil uil-star-half-alt" data-icon="uil uil-star-half-alt">uil-star-half-alt</option>
                                        <option value="uil uil-utensils-alt" data-icon="uil uil-utensils-alt">uil-utensils-alt</option>
                                        <option value="uil uil-share-alt" data-icon="uil uil-share-alt">uil-share-alt</option>
                                        <option value="uil uil-volume-down" data-icon="uil uil-volume-down">uil-volume-down</option>
                                        <option value="uil uil-wifi" data-icon="uil uil-wifi">uil-wifi</option>
                                        <option value="uil uil-cog" data-icon="uil uil-cog">uil-cog</option>
                                        <option value="uil uil-bookmark" data-icon="uil uil-bookmark">uil-bookmark</option>
                                        <option value="uil uil-wallet" data-icon="uil uil-wallet">uil-wallet</option>
                                        <option value="uil uil-minus" data-icon="uil uil-minus">uil-minus</option>
                                        <option value="uil uil-rss" data-icon="uil uil-rss">uil-rss</option>
                                        <option value="uil uil-sync" data-icon="uil uil-sync">uil-sync</option>
                                        <option value="uil uil-redo" data-icon="uil uil-redo">uil-redo</option>
                                        <option value="uil uil-bookmark-full" data-icon="uil uil-bookmark-full">uil-bookmark-full</option>
                                        <option value="uil uil-umbrella" data-icon="uil uil-umbrella">uil-umbrella</option>
                                        <option value="uil uil-trash" data-icon="uil uil-trash">uil-trash</option>
                                        <option value="uil uil-wifi-slash" data-icon="uil uil-wifi-slash">uil-wifi-slash</option>
                                        <option value="uil uil-plus-square" data-icon="uil uil-plus-square">uil-plus-square</option>
                                        <option value="uil uil-plus" data-icon="uil uil-plus">uil-plus</option>
                                        <option value="uil uil-signal-alt" data-icon="uil uil-signal-alt">uil-signal-alt</option>
                                        <option value="uil uil-pen" data-icon="uil uil-pen">uil-pen</option>
                                        <option value="uil uil-package" data-icon="uil uil-package">uil-package</option>
                                        <option value="uil uil-edit" data-icon="uil uil-edit">uil-edit</option>
                                        <option value="uil uil-signal" data-icon="uil uil-signal">uil-signal</option>
                                        <option value="uil uil-glass-martini-alt" data-icon="uil uil-glass-martini-alt">uil-glass-martini-alt</option>
                                        <option value="uil uil-file-plus" data-icon="uil uil-file-plus">uil-file-plus</option>
                                        <option value="uil uil-minus-circle" data-icon="uil uil-minus-circle">uil-minus-circle</option>
                                        <option value="uil uil-microphone" data-icon="uil uil-microphone">uil-microphone</option>
                                        <option value="uil uil-minus-square" data-icon="uil uil-minus-square">uil-minus-square</option>
                                        <option value="uil uil-minus-square-full" data-icon="uil uil-minus-square-full">uil-minus-square-full</option>
                                        <option value="uil uil-volume-mute" data-icon="uil uil-volume-mute">uil-volume-mute</option>
                                        <option value="uil uil-link-h" data-icon="uil uil-link-h">uil-link-h</option>
                                        <option value="uil uil-search" data-icon="uil uil-search">uil-search</option>
                                        <option value="uil uil-ellipsis-v" data-icon="uil uil-ellipsis-v">uil-ellipsis-v</option>
                                        <option value="uil uil-ellipsis-h" data-icon="uil uil-ellipsis-h">uil-ellipsis-h</option>
                                        <option value="uil uil-link-alt" data-icon="uil uil-link-alt">uil-link-alt</option>
                                        <option value="uil uil-calculator" data-icon="uil uil-calculator">uil-calculator</option>
                                        <option value="uil uil-layer-group" data-icon="uil uil-layer-group">uil-layer-group</option>
                                        <option value="uil uil-car" data-icon="uil uil-car">uil-car</option>
                                        <option value="uil uil-thumbs-up" data-icon="uil uil-thumbs-up">uil-thumbs-up</option>
                                        <option value="uil uil-link" data-icon="uil uil-link">uil-link</option>
                                        <option value="uil uil-home" data-icon="uil uil-home">uil-home</option>
                                        <option value="uil uil-keyboard" data-icon="uil uil-keyboard">uil-keyboard</option>
                                        <option value="uil uil-volume-off" data-icon="uil uil-volume-off">uil-volume-off</option>
                                        <option value="uil uil-edit-alt" data-icon="uil uil-edit-alt">uil-edit-alt</option>
                                        <option value="uil uil-restaurant" data-icon="uil uil-restaurant">uil-restaurant</option>
                                        <option value="uil uil-exclamation-octagon" data-icon="uil uil-exclamation-octagon">uil-exclamation-octagon</option>
                                        <option value="uil uil-globe" data-icon="uil uil-globe">uil-globe</option>
                                        <option value="uil uil-favorite" data-icon="uil uil-favorite">uil-favorite</option>
                                        <option value="uil uil-question-circle" data-icon="uil uil-question-circle">uil-question-circle</option>
                                        <option value="uil uil-info-circle" data-icon="uil uil-info-circle">uil-info-circle</option>
                                        <option value="uil uil-filter" data-icon="uil uil-filter">uil-filter</option>
                                        <option value="uil uil-volume" data-icon="uil uil-volume">uil-volume</option>
                                        <option value="uil uil-exclamation-triangle" data-icon="uil uil-exclamation-triangle">uil-exclamation-triangle</option>
                                        <option value="uil uil-exclamation-circle" data-icon="uil uil-exclamation-circle">uil-exclamation-circle</option>
                                        <option value="uil uil-thumbs-down" data-icon="uil uil-thumbs-down">uil-thumbs-down</option>
                                        <option value="uil uil-multiply" data-icon="uil uil-multiply">uil-multiply</option>
                                        <option value="uil uil-check-square" data-icon="uil uil-check-square">uil-check-square</option>
                                        <option value="uil uil-times-circle" data-icon="uil uil-times-circle">uil-times-circle</option>
                                        <option value="uil uil-box" data-icon="uil uil-box">uil-box</option>
                                        <option value="uil uil-sim-card" data-icon="uil uil-sim-card">uil-sim-card</option>
                                        <option value="uil uil-times" data-icon="uil uil-times">uil-times</option>
                                        <option value="uil uil-times-square" data-icon="uil uil-times-square">uil-times-square</option>
                                        <option value="uil uil-link-broken" data-icon="uil uil-link-broken">uil-link-broken</option>
                                        <option value="uil uil-cube" data-icon="uil uil-cube">uil-cube</option>
                                        <option value="uil uil-bolt-alt" data-icon="uil uil-bolt-alt">uil-bolt-alt</option>
                                        <option value="uil uil-calender" data-icon="uil uil-calender">uil-calender</option>
                                        <option value="uil uil-battery-empty" data-icon="uil uil-battery-empty">uil-battery-empty</option>
                                        <option value="uil uil-at" data-icon="uil uil-at">uil-at</option>
                                        <option value="uil uil-battery-bolt" data-icon="uil uil-battery-bolt">uil-battery-bolt</option>
                                        <option value="uil uil-plus-circle" data-icon="uil uil-plus-circle">uil-plus-circle</option>
                                        <option value="uil uil-check-circle" data-icon="uil uil-check-circle">uil-check-circle</option>
                                        <option value="uil uil-check" data-icon="uil uil-check">uil-check</option>
                                        <option value="uil uil-adjust-half" data-icon="uil uil-adjust-half">uil-adjust-half</option>
                                        <option value="uil uil-paperclip" data-icon="uil uil-paperclip">uil-paperclip</option>
                                        <option value="uil uil-bullseye" data-icon="uil uil-bullseye">uil-bullseye</option>
                                        <option value="uil uil-brightness" data-icon="uil uil-brightness">uil-brightness</option>
                                        <option value="uil uil-adjust-alt" data-icon="uil uil-adjust-alt">uil-adjust-alt</option>
                                        <option value="uil uil-adjust-circle" data-icon="uil uil-adjust-circle">uil-adjust-circle</option>
                                        <option value="uil uil-brightness-half" data-icon="uil uil-brightness-half">uil-brightness-half</option>
                                        <option value="uil uil-brightness-empty" data-icon="uil uil-brightness-empty">uil-brightness-empty</option>
                                        <option value="uil uil-sun" data-icon="uil uil-sun">uil-sun</option>
                                        <option value="uil uil-brightness-plus" data-icon="uil uil-brightness-plus">uil-brightness-plus</option>
                                        <option value="uil uil-key-skeleton" data-icon="uil uil-key-skeleton">uil-key-skeleton</option>
                                        <option value="uil uil-adjust" data-icon="uil uil-adjust">uil-adjust</option>
                                        <option value="uil uil-keyboard-hide" data-icon="uil uil-keyboard-hide">uil-keyboard-hide</option>
                                        <option value="uil uil-brightness-minus" data-icon="uil uil-brightness-minus">uil-brightness-minus</option>
                                        <option value="uil uil-key-skeleton-alt" data-icon="uil uil-key-skeleton-alt">uil-key-skeleton-alt</option>
                                        <option value="uil uil-bus" data-icon="uil uil-bus">uil-bus</option>
                                        <option value="uil uil-parcel" data-icon="uil uil-parcel">uil-parcel</option>
                                        <option value="uil uil-car-sideview" data-icon="uil uil-car-sideview">uil-car-sideview</option>
                                        <option value="uil uil-car-wash" data-icon="uil uil-car-wash">uil-car-wash</option>
                                        <option value="uil uil-bus-school" data-icon="uil uil-bus-school">uil-bus-school</option>
                                        <option value="uil uil-subway" data-icon="uil uil-subway">uil-subway</option>
                                        <option value="uil uil-ship" data-icon="uil uil-ship">uil-ship</option>
                                        <option value="uil uil-bus-alt" data-icon="uil uil-bus-alt">uil-bus-alt</option>
                                        <option value="uil uil-subway-alt" data-icon="uil uil-subway-alt">uil-subway-alt</option>
                                        <option value="uil uil-taxi" data-icon="uil uil-taxi">uil-taxi</option>
                                        <option value="uil uil-truck-loading" data-icon="uil uil-truck-loading">uil-truck-loading</option>
                                        <option value="uil uil-dribbble" data-icon="uil uil-dribbble">uil-dribbble</option>
                                        <option value="uil uil-dropbox" data-icon="uil uil-dropbox">uil-dropbox</option>
                                        <option value="uil uil-envelope-check" data-icon="uil uil-envelope-check">uil-envelope-check</option>
                                        <option value="uil uil-envelope-add" data-icon="uil uil-envelope-add">uil-envelope-add</option>
                                        <option value="uil uil-envelope-exclamation" data-icon="uil uil-envelope-exclamation">uil-envelope-exclamation</option>
                                        <option value="uil uil-phone-slash" data-icon="uil uil-phone-slash">uil-phone-slash</option>
                                        <option value="uil uil-outgoing-call" data-icon="uil uil-outgoing-call">uil-outgoing-call</option>
                                        <option value="uil uil-envelope" data-icon="uil uil-envelope">uil-envelope</option>
                                        <option value="uil uil-phone" data-icon="uil uil-phone">uil-phone</option>
                                        <option value="uil uil-calling" data-icon="uil uil-calling">uil-calling</option>
                                        <option value="uil uil-phone-times" data-icon="uil uil-phone-times">uil-phone-times</option>
                                        <option value="uil uil-envelope-search" data-icon="uil uil-envelope-search">uil-envelope-search</option>
                                        <option value="uil uil-phone-volume" data-icon="uil uil-phone-volume">uil-phone-volume</option>
                                        <option value="uil uil-envelope-upload" data-icon="uil uil-envelope-upload">uil-envelope-upload</option>
                                        <option value="uil uil-forwaded-call" data-icon="uil uil-forwaded-call">uil-forwaded-call</option>
                                        <option value="uil uil-envelope-share" data-icon="uil uil-envelope-share">uil-envelope-share</option>
                                        <option value="uil uil-envelope-upload-alt" data-icon="uil uil-envelope-upload-alt">uil-envelope-upload-alt</option>
                                        <option value="uil uil-envelope-minus" data-icon="uil uil-envelope-minus">uil-envelope-minus</option>
                                        <option value="uil uil-envelope-receive" data-icon="uil uil-envelope-receive">uil-envelope-receive</option>
                                        <option value="uil uil-envelope-redo" data-icon="uil uil-envelope-redo">uil-envelope-redo</option>
                                        <option value="uil uil-envelope-download-alt" data-icon="uil uil-envelope-download-alt">uil-envelope-download-alt</option>
                                        <option value="uil uil-envelope-download" data-icon="uil uil-envelope-download">uil-envelope-download</option>
                                        <option value="uil uil-brightness-low" data-icon="uil uil-brightness-low">uil-brightness-low</option>
                                        <option value="uil uil-envelope-shield" data-icon="uil uil-envelope-shield">uil-envelope-shield</option>
                                        <option value="uil uil-envelope-open" data-icon="uil uil-envelope-open">uil-envelope-open</option>
                                        <option value="uil uil-envelope-lock" data-icon="uil uil-envelope-lock">uil-envelope-lock</option>
                                        <option value="uil uil-keyboard-show" data-icon="uil uil-keyboard-show">uil-keyboard-show</option>
                                        <option value="uil uil-truck" data-icon="uil uil-truck">uil-truck</option>
                                        <option value="uil uil-envelopes" data-icon="uil uil-envelopes">uil-envelopes</option>
                                        <option value="uil uil-mailbox" data-icon="uil uil-mailbox">uil-mailbox</option>
                                        <option value="uil uil-envelope-heart" data-icon="uil uil-envelope-heart">uil-envelope-heart</option>
                                        <option value="uil uil-space-key" data-icon="uil uil-space-key">uil-space-key</option>
                                        <option value="uil uil-keyboard-alt" data-icon="uil uil-keyboard-alt">uil-keyboard-alt</option>
                                        <option value="uil uil-envelope-edit" data-icon="uil uil-envelope-edit">uil-envelope-edit</option>
                                        <option value="uil uil-postcard" data-icon="uil uil-postcard">uil-postcard</option>
                                        <option value="uil uil-fast-mail-alt" data-icon="uil uil-fast-mail-alt">uil-fast-mail-alt</option>
                                        <option value="uil uil-envelope-question" data-icon="uil uil-envelope-question">uil-envelope-question</option>
                                        <option value="uil uil-fast-mail" data-icon="uil uil-fast-mail">uil-fast-mail</option>
                                        <option value="uil uil-envelope-info" data-icon="uil uil-envelope-info">uil-envelope-info</option>
                                        <option value="uil uil-laptop-cloud" data-icon="uil uil-laptop-cloud">uil-laptop-cloud</option>
                                        <option value="uil uil-desktop-cloud-alt" data-icon="uil uil-desktop-cloud-alt">uil-desktop-cloud-alt</option>
                                        <option value="uil uil-envelope-star" data-icon="uil uil-envelope-star">uil-envelope-star</option>
                                        <option value="uil uil-envelope-times" data-icon="uil uil-envelope-times">uil-envelope-times</option>
                                        <option value="uil uil-luggage-cart" data-icon="uil uil-luggage-cart">uil-luggage-cart</option>
                                        <option value="uil uil-envelope-bookmark" data-icon="uil uil-envelope-bookmark">uil-envelope-bookmark</option>
                                        <option value="uil uil-missed-call" data-icon="uil uil-missed-call">uil-missed-call</option>
                                        <option value="uil uil-user" data-icon="uil uil-user">uil-user</option>
                                        <option value="uil uil-user-plus" data-icon="uil uil-user-plus">uil-user-plus</option>
                                        <option value="uil uil-envelope-alt" data-icon="uil uil-envelope-alt">uil-envelope-alt</option>
                                        <option value="uil uil-user-location" data-icon="uil uil-user-location">uil-user-location</option>
                                        <option value="uil uil-users-alt" data-icon="uil uil-users-alt">uil-users-alt</option>
                                        <option value="uil uil-book-reader" data-icon="uil uil-book-reader">uil-book-reader</option>
                                        <option value="uil uil-cloud-bookmark" data-icon="uil uil-cloud-bookmark">uil-cloud-bookmark</option>
                                        <option value="uil uil-phone-alt" data-icon="uil uil-phone-alt">uil-phone-alt</option>
                                        <option value="uil uil-cloud-computing" data-icon="uil uil-cloud-computing">uil-cloud-computing</option>
                                        <option value="uil uil-cloud-check" data-icon="uil uil-cloud-check">uil-cloud-check</option>
                                        <option value="uil uil-user-minus" data-icon="uil uil-user-minus">uil-user-minus</option>
                                        <option value="uil uil-cloud-times" data-icon="uil uil-cloud-times">uil-cloud-times</option>
                                        <option value="uil uil-cloud-block" data-icon="uil uil-cloud-block">uil-cloud-block</option>
                                        <option value="uil uil-columns" data-icon="uil uil-columns">uil-columns</option>
                                        <option value="uil uil-web-section" data-icon="uil uil-web-section">uil-web-section</option>
                                        <option value="uil uil-grid" data-icon="uil uil-grid">uil-grid</option>
                                        <option value="uil uil-web-grid-alt" data-icon="uil uil-web-grid-alt">uil-web-grid-alt</option>
                                        <option value="uil uil-window-maximize" data-icon="uil uil-window-maximize">uil-window-maximize</option>
                                        <option value="uil uil-web-section-alt" data-icon="uil uil-web-section-alt">uil-web-section-alt</option>
                                        <option value="uil uil-web-grid" data-icon="uil uil-web-grid">uil-web-grid</option>
                                        <option value="uil uil-server-connection" data-icon="uil uil-server-connection">uil-server-connection</option>
                                        <option value="uil uil-cloud-slash" data-icon="uil uil-cloud-slash">uil-cloud-slash</option>
                                        <option value="uil uil-cloud-upload" data-icon="uil uil-cloud-upload">uil-cloud-upload</option>
                                        <option value="uil uil-cloud-exclamation" data-icon="uil uil-cloud-exclamation">uil-cloud-exclamation</option>
                                        <option value="uil uil-database" data-icon="uil uil-database">uil-database</option>
                                        <option value="uil uil-server" data-icon="uil uil-server">uil-server</option>
                                        <option value="uil uil-cloud-unlock" data-icon="uil uil-cloud-unlock">uil-cloud-unlock</option>
                                        <option value="uil uil-cloud-share" data-icon="uil uil-cloud-share">uil-cloud-share</option>
                                        <option value="uil uil-envelope-send" data-icon="uil uil-envelope-send">uil-envelope-send</option>
                                        <option value="uil uil-cloud-shield" data-icon="uil uil-cloud-shield">uil-cloud-shield</option>
                                        <option value="uil uil-laptop-connection" data-icon="uil uil-laptop-connection">uil-laptop-connection</option>
                                        <option value="uil uil-server-network-alt" data-icon="uil uil-server-network-alt">uil-server-network-alt</option>
                                        <option value="uil uil-cloud-redo" data-icon="uil uil-cloud-redo">uil-cloud-redo</option>
                                        <option value="uil uil-servers" data-icon="uil uil-servers">uil-servers</option>
                                        <option value="uil uil-server-network" data-icon="uil uil-server-network">uil-server-network</option>
                                        <option value="uil uil-cloud-heart" data-icon="uil uil-cloud-heart">uil-cloud-heart</option>
                                        <option value="uil uil-database-alt" data-icon="uil uil-database-alt">uil-database-alt</option>
                                        <option value="uil uil-cloud-lock" data-icon="uil uil-cloud-lock">uil-cloud-lock</option>
                                        <option value="uil uil-cloud-info" data-icon="uil uil-cloud-info">uil-cloud-info</option>
                                        <option value="uil uil-phone-pause" data-icon="uil uil-phone-pause">uil-phone-pause</option>
                                        <option value="uil uil-user-square" data-icon="uil uil-user-square">uil-user-square</option>
                                        <option value="uil uil-user-exclamation" data-icon="uil uil-user-exclamation">uil-user-exclamation</option>
                                        <option value="uil uil-cloud-download" data-icon="uil uil-cloud-download">uil-cloud-download</option>
                                        <option value="uil uil-user-circle" data-icon="uil uil-user-circle">uil-user-circle</option>
                                        <option value="uil uil-cloud-wifi" data-icon="uil uil-cloud-wifi">uil-cloud-wifi</option>
                                        <option value="uil uil-data-sharing" data-icon="uil uil-data-sharing">uil-data-sharing</option>
                                        <option value="uil uil-cloud-data-connection" data-icon="uil uil-cloud-data-connection">uil-cloud-data-connection</option>
                                        <option value="uil uil-backward" data-icon="uil uil-backward">uil-backward</option>
                                        <option value="uil uil-camera" data-icon="uil uil-camera">uil-camera</option>
                                        <option value="uil uil-music-tune-slash" data-icon="uil uil-music-tune-slash">uil-music-tune-slash</option>
                                        <option value="uil uil-user-times" data-icon="uil uil-user-times">uil-user-times</option>
                                        <option value="uil uil-scenery" data-icon="uil uil-scenery">uil-scenery</option>
                                        <option value="uil uil-user-check" data-icon="uil uil-user-check">uil-user-check</option>
                                        <option value="uil uil-headphones" data-icon="uil uil-headphones">uil-headphones</option>
                                        <option value="uil uil-step-backward" data-icon="uil uil-step-backward">uil-step-backward</option>
                                        <option value="uil uil-image-search" data-icon="uil uil-image-search">uil-image-search</option>
                                        <option value="uil uil-image-minus" data-icon="uil uil-image-minus">uil-image-minus</option>
                                        <option value="uil uil-window-section" data-icon="uil uil-window-section">uil-window-section</option>
                                        <option value="uil uil-play-circle" data-icon="uil uil-play-circle">uil-play-circle</option>
                                        <option value="uil uil-pause-circle" data-icon="uil uil-pause-circle">uil-pause-circle</option>
                                        <option value="uil uil-image-shield" data-icon="uil uil-image-shield">uil-image-shield</option>
                                        <option value="uil uil-window" data-icon="uil uil-window">uil-window</option>
                                        <option value="uil uil-pause" data-icon="uil uil-pause">uil-pause</option>
                                        <option value="uil uil-server-alt" data-icon="uil uil-server-alt">uil-server-alt</option>
                                        <option value="uil uil-image-question" data-icon="uil uil-image-question">uil-image-question</option>
                                        <option value="uil uil-music" data-icon="uil uil-music">uil-music</option>
                                        <option value="uil uil-image-block" data-icon="uil uil-image-block">uil-image-block</option>
                                        <option value="uil uil-music-note" data-icon="uil uil-music-note">uil-music-note</option>
                                        <option value="uil uil-step-forward" data-icon="uil uil-step-forward">uil-step-forward</option>
                                        <option value="uil uil-image-redo" data-icon="uil uil-image-redo">uil-image-redo</option>
                                        <option value="uil uil-image" data-icon="uil uil-image">uil-image</option>
                                        <option value="uil uil-picture" data-icon="uil uil-picture">uil-picture</option>
                                        <option value="uil uil-image-download" data-icon="uil uil-image-download">uil-image-download</option>
                                        <option value="uil uil-image-v" data-icon="uil uil-image-v">uil-image-v</option>
                                        <option value="uil uil-forward" data-icon="uil uil-forward">uil-forward</option>
                                        <option value="uil uil-image-times" data-icon="uil uil-image-times">uil-image-times</option>
                                        <option value="uil uil-headphones-alt" data-icon="uil uil-headphones-alt">uil-headphones-alt</option>
                                        <option value="fa-solid fa-0" data-icon="fa-solid fa-0">fa-solid fa-0</option>
                                        <option value="fa-solid fa-1" data-icon="fa-solid fa-1">fa-solid fa-1</option>
                                        <option value="fa-solid fa-2" data-icon="fa-solid fa-2">fa-solid fa-2</option>
                                        <option value="fa-solid fa-3" data-icon="fa-solid fa-3">fa-solid fa-3</option>
                                        <option value="fa-solid fa-4" data-icon="fa-solid fa-4">fa-solid fa-4</option>
                                        <option value="fa-solid fa-5" data-icon="fa-solid fa-5">fa-solid fa-5</option>
                                        <option value="fa-solid fa-6" data-icon="fa-solid fa-6">fa-solid fa-6</option>
                                        <option value="fa-solid fa-7" data-icon="fa-solid fa-7">fa-solid fa-7</option>
                                        <option value="fa-solid fa-8" data-icon="fa-solid fa-8">fa-solid fa-8</option>
                                        <option value="fa-solid fa-9" data-icon="fa-solid fa-9">fa-solid fa-9</option>
                                        <option value="fa-solid fa-fill-drip" data-icon="fa-solid fa-fill-drip">fa-solid fa-fill-drip</option>
                                        <option value="fa-solid fa-arrows-to-circle" data-icon="fa-solid fa-arrows-to-circle">fa-solid fa-arrows-to-circle</option>
                                        <option value="fa-solid fa-chevron-circle-right" data-icon="fa-solid fa-chevron-circle-right">fa-solid fa-chevron-circle-righoption>li>
                                        <option value="fa-solid fa-circle-chevron-right" data-icon="fa-solid fa-circle-chevron-right">fa-solid fa-circle-chevron-righoption>li>
                                        <option value="fa-solid fa-at" data-icon="fa-solid fa-at">fa-solid fa-at</option>
                                        <option value="fa-solid fa-trash-alt" data-icon="fa-solid fa-trash-alt">fa-solid fa-trash-alt</option>
                                        <option value="fa-solid fa-trash-can" data-icon="fa-solid fa-trash-can">fa-solid fa-trash-can</option>
                                        <option value="fa-solid fa-text-height" data-icon="fa-solid fa-text-height">fa-solid fa-text-height</option>
                                        <option value="fa-solid fa-user-times" data-icon="fa-solid fa-user-times">fa-solid fa-user-times</option>
                                        <option value="fa-solid fa-user-xmark" data-icon="fa-solid fa-user-xmark">fa-solid fa-user-xmark</option>
                                        <option value="fa-solid fa-stethoscope" data-icon="fa-solid fa-stethoscope">fa-solid fa-stethoscope</option>
                                        <option value="fa-solid fa-comment-alt" data-icon="fa-solid fa-comment-alt">fa-solid fa-comment-alt</option>
                                        <option value="fa-solid fa-message" data-icon="fa-solid fa-message">fa-solid fa-message</option>
                                        <option value="fa-solid fa-info" data-icon="fa-solid fa-info">fa-solid fa-info</option>
                                        <option value="fa-solid fa-compress-alt" data-icon="fa-solid fa-compress-alt">fa-solid fa-compress-alt</option>
                                        <option value="fa-solid fa-down-left-and-up-right-to-center" data-icon="fa-solid fa-down-left-and-up-right-to-center"option>fa-down-left-and-up-right-to-center</span></li>
                                        <option value="fa-solid fa-explosion" data-icon="fa-solid fa-explosion">fa-solid fa-explosion</option>
                                        <option value="fa-solid fa-file-alt" data-icon="fa-solid fa-file-alt">fa-solid fa-file-alt</option>
                                        <option value="fa-solid fa-file-lines" data-icon="fa-solid fa-file-lines">fa-solid fa-file-lines</option>
                                        <option value="fa-solid fa-file-text" data-icon="fa-solid fa-file-text">fa-solid fa-file-text</option>
                                        <option value="fa-solid fa-wave-square" data-icon="fa-solid fa-wave-square">fa-solid fa-wave-square</option>
                                        <option value="fa-solid fa-ring" data-icon="fa-solid fa-ring">fa-solid fa-ring</option>
                                        <option value="fa-solid fa-building-un" data-icon="fa-solid fa-building-un">fa-solid fa-building-un</option>
                                        <option value="fa-solid fa-dice-three" data-icon="fa-solid fa-dice-three">fa-solid fa-dice-three</option>
                                        <option value="fa-solid fa-calendar-alt" data-icon="fa-solid fa-calendar-alt">fa-solid fa-calendar-alt</option>
                                        <option value="fa-solid fa-calendar-days" data-icon="fa-solid fa-calendar-days">fa-solid fa-calendar-days</option>
                                        <option value="fa-solid fa-anchor-circle-check" data-icon="fa-solid fa-anchor-circle-check">fa-solid fa-anchor-circle-check</option>
                                        <option value="fa-solid fa-building-circle-arrow-right" data-icon="fa-solid fa-building-circle-arrow-right"option>fa-building-circle-arrow-right</span></li>
                                        <option value="fa-solid fa-volleyball-ball" data-icon="fa-solid fa-volleyball-ball">fa-solid fa-volleyball-ball</option>
                                        <option value="fa-solid fa-volleyball" data-icon="fa-solid fa-volleyball">fa-solid fa-volleyball</option>
                                        <option value="fa-solid fa-arrows-up-to-line" data-icon="fa-solid fa-arrows-up-to-line">fa-solid fa-arrows-up-to-line</option>
                                        <option value="fa-solid fa-sort-desc" data-icon="fa-solid fa-sort-desc">fa-solid fa-sort-desc</option>
                                        <option value="fa-solid fa-sort-down" data-icon="fa-solid fa-sort-down">fa-solid fa-sort-down</option>
                                        <option value="fa-solid fa-circle-minus" data-icon="fa-solid fa-circle-minus">fa-solid fa-circle-minus</option>
                                        <option value="fa-solid fa-minus-circle" data-icon="fa-solid fa-minus-circle">fa-solid fa-minus-circle</option>
                                        <option value="fa-solid fa-door-open" data-icon="fa-solid fa-door-open">fa-solid fa-door-open</option>
                                        <option value="fa-solid fa-right-from-bracket" data-icon="fa-solid fa-right-from-bracket">fa-solid fa-right-from-bracket</option>
                                        <option value="fa-solid fa-sign-out-alt" data-icon="fa-solid fa-sign-out-alt">fa-solid fa-sign-out-alt</option>
                                        <option value="fa-solid fa-atom" data-icon="fa-solid fa-atom">fa-solid fa-atom</option>
                                        <option value="fa-solid fa-soap" data-icon="fa-solid fa-soap">fa-solid fa-soap</option>
                                        <option value="fa-solid fa-heart-music-camera-bolt" data-icon="fa-solid fa-heart-music-camera-bolt"option>fa-heart-music-camera-bolt</span></li>
                                        <option value="fa-solid fa-icons" data-icon="fa-solid fa-icons">fa-solid fa-icons</option>
                                        <option value="fa-solid fa-microphone-alt-slash" data-icon="fa-solid fa-microphone-alt-slash">fa-solid fa-microphone-alt-slasoption>li>
                                        <option value="fa-solid fa-microphone-lines-slash" data-icon="fa-solid fa-microphone-lines-slash">fa-solid fa-microphone-linoption>span></li>
                                        <option value="fa-solid fa-bridge-circle-check" data-icon="fa-solid fa-bridge-circle-check">fa-solid fa-bridge-circle-check</option>
                                        <option value="fa-solid fa-pump-medical" data-icon="fa-solid fa-pump-medical">fa-solid fa-pump-medical</option>
                                        <option value="fa-solid fa-fingerprint" data-icon="fa-solid fa-fingerprint">fa-solid fa-fingerprint</option>
                                        <option value="fa-solid fa-hand-point-right" data-icon="fa-solid fa-hand-point-right">fa-solid fa-hand-point-right</option>
                                        <option value="fa-solid fa-magnifying-glass-location" data-icon="fa-solid fa-magnifying-glass-location"option>fa-magnifying-glass-location</span></li>
                                        <option value="fa-solid fa-search-location" data-icon="fa-solid fa-search-location">fa-solid fa-search-location</option>
                                        <option value="fa-solid fa-forward-step" data-icon="fa-solid fa-forward-step">fa-solid fa-forward-step</option>
                                        <option value="fa-solid fa-step-forward" data-icon="fa-solid fa-step-forward">fa-solid fa-step-forward</option>
                                        <option value="fa-solid fa-face-smile-beam" data-icon="fa-solid fa-face-smile-beam">fa-solid fa-face-smile-beam</option>
                                        <option value="fa-solid fa-smile-beam" data-icon="fa-solid fa-smile-beam">fa-solid fa-smile-beam</option>
                                        <option value="fa-solid fa-flag-checkered" data-icon="fa-solid fa-flag-checkered">fa-solid fa-flag-checkered</option>
                                        <option value="fa-solid fa-football-ball" data-icon="fa-solid fa-football-ball">fa-solid fa-football-ball</option>
                                        <option value="fa-solid fa-football" data-icon="fa-solid fa-football">fa-solid fa-football</option>
                                        <option value="fa-solid fa-school-circle-exclamation" data-icon="fa-solid fa-school-circle-exclamation"option>fa-school-circle-exclamation</span></li>
                                        <option value="fa-solid fa-crop" data-icon="fa-solid fa-crop">fa-solid fa-crop</option>
                                        <option value="fa-solid fa-angle-double-down" data-icon="fa-solid fa-angle-double-down">fa-solid fa-angle-double-down</option>
                                        <option value="fa-solid fa-angles-down" data-icon="fa-solid fa-angles-down">fa-solid fa-angles-down</option>
                                        <option value="fa-solid fa-users-rectangle" data-icon="fa-solid fa-users-rectangle">fa-solid fa-users-rectangle</option>
                                        <option value="fa-solid fa-people-roof" data-icon="fa-solid fa-people-roof">fa-solid fa-people-roof</option>
                                        <option value="fa-solid fa-people-line" data-icon="fa-solid fa-people-line">fa-solid fa-people-line</option>
                                        <option value="fa-solid fa-beer-mug-empty" data-icon="fa-solid fa-beer-mug-empty">fa-solid fa-beer-mug-empty</option>
                                        <option value="fa-solid fa-beer" data-icon="fa-solid fa-beer">fa-solid fa-beer</option>
                                        <option value="fa-solid fa-diagram-predecessor" data-icon="fa-solid fa-diagram-predecessor">fa-solid fa-diagram-predecessor</option>
                                        <option value="fa-solid fa-arrow-up-long" data-icon="fa-solid fa-arrow-up-long">fa-solid fa-arrow-up-long</option>
                                        <option value="fa-solid fa-long-arrow-up" data-icon="fa-solid fa-long-arrow-up">fa-solid fa-long-arrow-up</option>
                                        <option value="fa-solid fa-burn" data-icon="fa-solid fa-burn">fa-solid fa-burn</option>
                                        <option value="fa-solid fa-fire-flame-simple" data-icon="fa-solid fa-fire-flame-simple">fa-solid fa-fire-flame-simple</option>
                                        <option value="fa-solid fa-male" data-icon="fa-solid fa-male">fa-solid fa-male</option>
                                        <option value="fa-solid fa-person" data-icon="fa-solid fa-person">fa-solid fa-person</option>
                                        <option value="fa-solid fa-laptop" data-icon="fa-solid fa-laptop">fa-solid fa-laptop</option>
                                        <option value="fa-solid fa-file-csv" data-icon="fa-solid fa-file-csv">fa-solid fa-file-csv</option>
                                        <option value="fa-solid fa-menorah" data-icon="fa-solid fa-menorah">fa-solid fa-menorah</option>
                                        <option value="fa-solid fa-truck-plane" data-icon="fa-solid fa-truck-plane">fa-solid fa-truck-plane</option>
                                        <option value="fa-solid fa-record-vinyl" data-icon="fa-solid fa-record-vinyl">fa-solid fa-record-vinyl</option>
                                        <option value="fa-solid fa-face-grin-stars" data-icon="fa-solid fa-face-grin-stars">fa-solid fa-face-grin-stars</option>
                                        <option value="fa-solid fa-grin-stars" data-icon="fa-solid fa-grin-stars">fa-solid fa-grin-stars</option>
                                        <option value="fa-solid fa-bong" data-icon="fa-solid fa-bong">fa-solid fa-bong</option>
                                        <option value="fa-solid fa-pastafarianism" data-icon="fa-solid fa-pastafarianism">fa-solid fa-pastafarianism</option>
                                        <option value="fa-solid fa-spaghetti-monster-flying" data-icon="fa-solid fa-spaghetti-monster-flying"option>fa-spaghetti-monster-flying</span></li>
                                        <option value="fa-solid fa-arrow-down-up-across-line" data-icon="fa-solid fa-arrow-down-up-across-line"option>fa-arrow-down-up-across-line</span></li>
                                        <option value="fa-solid fa-spoon" data-icon="fa-solid fa-spoon">fa-solid fa-spoon</option>
                                        <option value="fa-solid fa-utensil-spoon" data-icon="fa-solid fa-utensil-spoon">fa-solid fa-utensil-spoon</option>
                                        <option value="fa-solid fa-jar-wheat" data-icon="fa-solid fa-jar-wheat">fa-solid fa-jar-wheat</option>
                                        <option value="fa-solid fa-envelopes-bulk" data-icon="fa-solid fa-envelopes-bulk">fa-solid fa-envelopes-bulk</option>
                                        <option value="fa-solid fa-mail-bulk" data-icon="fa-solid fa-mail-bulk">fa-solid fa-mail-bulk</option>
                                        <option value="fa-solid fa-file-circle-exclamation" data-icon="fa-solid fa-file-circle-exclamation"option>fa-file-circle-exclamation</span></li>
                                        <option value="fa-solid fa-circle-h" data-icon="fa-solid fa-circle-h">fa-solid fa-circle-h</option>
                                        <option value="fa-solid fa-hospital-symbol" data-icon="fa-solid fa-hospital-symbol">fa-solid fa-hospital-symbol</option>
                                        <option value="fa-solid fa-pager" data-icon="fa-solid fa-pager">fa-solid fa-pager</option>
                                        <option value="fa-solid fa-address-book" data-icon="fa-solid fa-address-book">fa-solid fa-address-book</option>
                                        <option value="fa-solid fa-contact-book" data-icon="fa-solid fa-contact-book">fa-solid fa-contact-book</option>
                                        <option value="fa-solid fa-strikethrough" data-icon="fa-solid fa-strikethrough">fa-solid fa-strikethrough</option>
                                        <option value="fa-solid fa-k" data-icon="fa-solid fa-k">fa-solid fa-k</option>
                                        <option value="fa-solid fa-landmark-flag" data-icon="fa-solid fa-landmark-flag">fa-solid fa-landmark-flag</option>
                                        <option value="fa-solid fa-pencil-alt" data-icon="fa-solid fa-pencil-alt">fa-solid fa-pencil-alt</option>
                                        <option value="fa-solid fa-pencil" data-icon="fa-solid fa-pencil">fa-solid fa-pencil</option>
                                        <option value="fa-solid fa-backward" data-icon="fa-solid fa-backward">fa-solid fa-backward</option>
                                        <option value="fa-solid fa-caret-right" data-icon="fa-solid fa-caret-right">fa-solid fa-caret-right</option>
                                        <option value="fa-solid fa-comments" data-icon="fa-solid fa-comments">fa-solid fa-comments</option>
                                        <option value="fa-solid fa-file-clipboard" data-icon="fa-solid fa-file-clipboard">fa-solid fa-file-clipboard</option>
                                        <option value="fa-solid fa-paste" data-icon="fa-solid fa-paste">fa-solid fa-paste</option>
                                        <option value="fa-solid fa-code-pull-request" data-icon="fa-solid fa-code-pull-request">fa-solid fa-code-pull-request</option>
                                        <option value="fa-solid fa-clipboard-list" data-icon="fa-solid fa-clipboard-list">fa-solid fa-clipboard-list</option>
                                        <option value="fa-solid fa-truck-loading" data-icon="fa-solid fa-truck-loading">fa-solid fa-truck-loading</option>
                                        <option value="fa-solid fa-truck-ramp-box" data-icon="fa-solid fa-truck-ramp-box">fa-solid fa-truck-ramp-box</option>
                                        <option value="fa-solid fa-user-check" data-icon="fa-solid fa-user-check">fa-solid fa-user-check</option>
                                        <option value="fa-solid fa-vial-virus" data-icon="fa-solid fa-vial-virus">fa-solid fa-vial-virus</option>
                                        <option value="fa-solid fa-sheet-plastic" data-icon="fa-solid fa-sheet-plastic">fa-solid fa-sheet-plastic</option>
                                        <option value="fa-solid fa-blog" data-icon="fa-solid fa-blog">fa-solid fa-blog</option>
                                        <option value="fa-solid fa-user-ninja" data-icon="fa-solid fa-user-ninja">fa-solid fa-user-ninja</option>
                                        <option value="fa-solid fa-person-arrow-up-from-line" data-icon="fa-solid fa-person-arrow-up-from-line"option>fa-person-arrow-up-from-line</span></li>
                                        <option value="fa-solid fa-scroll-torah" data-icon="fa-solid fa-scroll-torah">fa-solid fa-scroll-torah</option>
                                        <option value="fa-solid fa-torah" data-icon="fa-solid fa-torah">fa-solid fa-torah</option>
                                        <option value="fa-solid fa-broom-ball" data-icon="fa-solid fa-broom-ball">fa-solid fa-broom-ball</option>
                                        <option value="fa-solid fa-quidditch-broom-ball" data-icon="fa-solid fa-quidditch-broom-ball">fa-solid fa-quidditch-broom-baloption>li>
                                        <option value="fa-solid fa-quidditch" data-icon="fa-solid fa-quidditch">fa-solid fa-quidditch</option>
                                        <option value="fa-solid fa-toggle-off" data-icon="fa-solid fa-toggle-off">fa-solid fa-toggle-off</option>
                                        <option value="fa-solid fa-archive" data-icon="fa-solid fa-archive">fa-solid fa-archive</option>
                                        <option value="fa-solid fa-box-archive" data-icon="fa-solid fa-box-archive">fa-solid fa-box-archive</option>
                                        <option value="fa-solid fa-person-drowning" data-icon="fa-solid fa-person-drowning">fa-solid fa-person-drowning</option>
                                        <option value="fa-solid fa-arrow-down-9-1" data-icon="fa-solid fa-arrow-down-9-1">fa-solid fa-arrow-down-9-1</option>
                                        <option value="fa-solid fa-sort-numeric-desc" data-icon="fa-solid fa-sort-numeric-desc">fa-solid fa-sort-numeric-desc</option>
                                        <option value="fa-solid fa-sort-numeric-down-alt" data-icon="fa-solid fa-sort-numeric-down-alt">fa-solid fa-sort-numeric-option>span></li>
                                        <option value="fa-solid fa-face-grin-tongue-squint" data-icon="fa-solid fa-face-grin-tongue-squint"option>fa-face-grin-tongue-squint</span></li>
                                        <option value="fa-solid fa-grin-tongue-squint" data-icon="fa-solid fa-grin-tongue-squint">fa-solid fa-grin-tongue-squint</option>
                                        <option value="fa-solid fa-spray-can" data-icon="fa-solid fa-spray-can">fa-solid fa-spray-can</option>
                                        <option value="fa-solid fa-truck-monster" data-icon="fa-solid fa-truck-monster">fa-solid fa-truck-monster</option>
                                        <option value="fa-solid fa-w" data-icon="fa-solid fa-w">fa-solid fa-w</option>
                                        <option value="fa-solid fa-earth-africa" data-icon="fa-solid fa-earth-africa">fa-solid fa-earth-africa</option>
                                        <option value="fa-solid fa-globe-africa" data-icon="fa-solid fa-globe-africa">fa-solid fa-globe-africa</option>
                                        <option value="fa-solid fa-rainbow" data-icon="fa-solid fa-rainbow">fa-solid fa-rainbow</option>
                                        <option value="fa-solid fa-circle-notch" data-icon="fa-solid fa-circle-notch">fa-solid fa-circle-notch</option>
                                        <option value="fa-solid fa-tablet-alt" data-icon="fa-solid fa-tablet-alt">fa-solid fa-tablet-alt</option>
                                        <option value="fa-solid fa-tablet-screen-button" data-icon="fa-solid fa-tablet-screen-button">fa-solid fa-tablet-screen-buttooption>li>
                                        <option value="fa-solid fa-paw" data-icon="fa-solid fa-paw">fa-solid fa-paw</option>
                                        <option value="fa-solid fa-cloud" data-icon="fa-solid fa-cloud">fa-solid fa-cloud</option>
                                        <option value="fa-solid fa-trowel-bricks" data-icon="fa-solid fa-trowel-bricks">fa-solid fa-trowel-bricks</option>
                                        <option value="fa-solid fa-face-flushed" data-icon="fa-solid fa-face-flushed">fa-solid fa-face-flushed</option>
                                        <option value="fa-solid fa-flushed" data-icon="fa-solid fa-flushed">fa-solid fa-flushed</option>
                                        <option value="fa-solid fa-hospital-user" data-icon="fa-solid fa-hospital-user">fa-solid fa-hospital-user</option>
                                        <option value="fa-solid fa-tent-arrow-left-right" data-icon="fa-solid fa-tent-arrow-left-right">fa-solid fa-tent-arrow-leoption>span></li>
                                        <option value="fa-solid fa-gavel" data-icon="fa-solid fa-gavel">fa-solid fa-gavel</option>
                                        <option value="fa-solid fa-legal" data-icon="fa-solid fa-legal">fa-solid fa-legal</option>
                                        <option value="fa-solid fa-binoculars" data-icon="fa-solid fa-binoculars">fa-solid fa-binoculars</option>
                                        <option value="fa-solid fa-microphone-slash" data-icon="fa-solid fa-microphone-slash">fa-solid fa-microphone-slash</option>
                                        <option value="fa-solid fa-box-tissue" data-icon="fa-solid fa-box-tissue">fa-solid fa-box-tissue</option>
                                        <option value="fa-solid fa-motorcycle" data-icon="fa-solid fa-motorcycle">fa-solid fa-motorcycle</option>
                                        <option value="fa-solid fa-bell-concierge" data-icon="fa-solid fa-bell-concierge">fa-solid fa-bell-concierge</option>
                                        <option value="fa-solid fa-concierge-bell" data-icon="fa-solid fa-concierge-bell">fa-solid fa-concierge-bell</option>
                                        <option value="fa-solid fa-pen-ruler" data-icon="fa-solid fa-pen-ruler">fa-solid fa-pen-ruler</option>
                                        <option value="fa-solid fa-pencil-ruler" data-icon="fa-solid fa-pencil-ruler">fa-solid fa-pencil-ruler</option>
                                        <option value="fa-solid fa-people-arrows-left-right" data-icon="fa-solid fa-people-arrows-left-right"option>fa-people-arrows-left-right</span></li>
                                        <option value="fa-solid fa-people-arrows" data-icon="fa-solid fa-people-arrows">fa-solid fa-people-arrows</option>
                                        <option value="fa-solid fa-mars-and-venus-burst" data-icon="fa-solid fa-mars-and-venus-burst">fa-solid fa-mars-and-venus-bursoption>li>
                                        <option value="fa-solid fa-caret-square-right" data-icon="fa-solid fa-caret-square-right">fa-solid fa-caret-square-right</option>
                                        <option value="fa-solid fa-square-caret-right" data-icon="fa-solid fa-square-caret-right">fa-solid fa-square-caret-right</option>
                                        <option value="fa-solid fa-cut" data-icon="fa-solid fa-cut">fa-solid fa-cut</option>
                                        <option value="fa-solid fa-scissors" data-icon="fa-solid fa-scissors">fa-solid fa-scissors</option>
                                        <option value="fa-solid fa-sun-plant-wilt" data-icon="fa-solid fa-sun-plant-wilt">fa-solid fa-sun-plant-wilt</option>
                                        <option value="fa-solid fa-toilets-portable" data-icon="fa-solid fa-toilets-portable">fa-solid fa-toilets-portable</option>
                                        <option value="fa-solid fa-hockey-puck" data-icon="fa-solid fa-hockey-puck">fa-solid fa-hockey-puck</option>
                                        <option value="fa-solid fa-table" data-icon="fa-solid fa-table">fa-solid fa-table</option>
                                        <option value="fa-solid fa-magnifying-glass-arrow-right" data-icon="fa-solid fa-magnifying-glass-arrow-right"option>fa-magnifying-glass-arrow-right</span></li>
                                        <option value="fa-solid fa-digital-tachograph" data-icon="fa-solid fa-digital-tachograph">fa-solid fa-digital-tachograph</option>
                                        <option value="fa-solid fa-tachograph-digital" data-icon="fa-solid fa-tachograph-digital">fa-solid fa-tachograph-digital</option>
                                        <option value="fa-solid fa-users-slash" data-icon="fa-solid fa-users-slash">fa-solid fa-users-slash</option>
                                        <option value="fa-solid fa-clover" data-icon="fa-solid fa-clover">fa-solid fa-clover</option>
                                        <option value="fa-solid fa-mail-reply" data-icon="fa-solid fa-mail-reply">fa-solid fa-mail-reply</option>
                                        <option value="fa-solid fa-reply" data-icon="fa-solid fa-reply">fa-solid fa-reply</option>
                                        <option value="fa-solid fa-star-and-crescent" data-icon="fa-solid fa-star-and-crescent">fa-solid fa-star-and-crescent</option>
                                        <option value="fa-solid fa-house-fire" data-icon="fa-solid fa-house-fire">fa-solid fa-house-fire</option>
                                        <option value="fa-solid fa-minus-square" data-icon="fa-solid fa-minus-square">fa-solid fa-minus-square</option>
                                        <option value="fa-solid fa-square-minus" data-icon="fa-solid fa-square-minus">fa-solid fa-square-minus</option>
                                        <option value="fa-solid fa-helicopter" data-icon="fa-solid fa-helicopter">fa-solid fa-helicopter</option>
                                        <option value="fa-solid fa-compass" data-icon="fa-solid fa-compass">fa-solid fa-compass</option>
                                        <option value="fa-solid fa-caret-square-down" data-icon="fa-solid fa-caret-square-down">fa-solid fa-caret-square-down</option>
                                        <option value="fa-solid fa-square-caret-down" data-icon="fa-solid fa-square-caret-down">fa-solid fa-square-caret-down</option>
                                        <option value="fa-solid fa-file-circle-question" data-icon="fa-solid fa-file-circle-question">fa-solid fa-file-circle-questiooption>li>
                                        <option value="fa-solid fa-laptop-code" data-icon="fa-solid fa-laptop-code">fa-solid fa-laptop-code</option>
                                        <option value="fa-solid fa-swatchbook" data-icon="fa-solid fa-swatchbook">fa-solid fa-swatchbook</option>
                                        <option value="fa-solid fa-prescription-bottle" data-icon="fa-solid fa-prescription-bottle">fa-solid fa-prescription-bottle</option>
                                        <option value="fa-solid fa-bars" data-icon="fa-solid fa-bars">fa-solid fa-bars</option>
                                        <option value="fa-solid fa-navicon" data-icon="fa-solid fa-navicon">fa-solid fa-navicon</option>
                                        <option value="fa-solid fa-people-group" data-icon="fa-solid fa-people-group">fa-solid fa-people-group</option>
                                        <option value="fa-solid fa-hourglass-3" data-icon="fa-solid fa-hourglass-3">fa-solid fa-hourglass-3</option>
                                        <option value="fa-solid fa-hourglass-end" data-icon="fa-solid fa-hourglass-end">fa-solid fa-hourglass-end</option>
                                        <option value="fa-solid fa-heart-broken" data-icon="fa-solid fa-heart-broken">fa-solid fa-heart-broken</option>
                                        <option value="fa-solid fa-heart-crack" data-icon="fa-solid fa-heart-crack">fa-solid fa-heart-crack</option>
                                        <option value="fa-solid fa-external-link-square-alt" data-icon="fa-solid fa-external-link-square-alt"option>fa-external-link-square-alt</span></li>
                                        <option value="fa-solid fa-square-up-right" data-icon="fa-solid fa-square-up-right">fa-solid fa-square-up-right</option>
                                        <option value="fa-solid fa-face-kiss-beam" data-icon="fa-solid fa-face-kiss-beam">fa-solid fa-face-kiss-beam</option>
                                        <option value="fa-solid fa-kiss-beam" data-icon="fa-solid fa-kiss-beam">fa-solid fa-kiss-beam</option>
                                        <option value="fa-solid fa-film" data-icon="fa-solid fa-film">fa-solid fa-film</option>
                                        <option value="fa-solid fa-ruler-horizontal" data-icon="fa-solid fa-ruler-horizontal">fa-solid fa-ruler-horizontal</option>
                                        <option value="fa-solid fa-people-robbery" data-icon="fa-solid fa-people-robbery">fa-solid fa-people-robbery</option>
                                        <option value="fa-solid fa-lightbulb" data-icon="fa-solid fa-lightbulb">fa-solid fa-lightbulb</option>
                                        <option value="fa-solid fa-caret-left" data-icon="fa-solid fa-caret-left">fa-solid fa-caret-left</option>
                                        <option value="fa-solid fa-circle-exclamation" data-icon="fa-solid fa-circle-exclamation">fa-solid fa-circle-exclamation</option>
                                        <option value="fa-solid fa-exclamation-circle" data-icon="fa-solid fa-exclamation-circle">fa-solid fa-exclamation-circle</option>
                                        <option value="fa-solid fa-school-circle-xmark" data-icon="fa-solid fa-school-circle-xmark">fa-solid fa-school-circle-xmark</option>
                                        <option value="fa-solid fa-arrow-right-from-bracket" data-icon="fa-solid fa-arrow-right-from-bracket"option>fa-arrow-right-from-bracket</span></li>
                                        <option value="fa-solid fa-sign-out" data-icon="fa-solid fa-sign-out">fa-solid fa-sign-out</option>
                                        <option value="fa-solid fa-chevron-circle-down" data-icon="fa-solid fa-chevron-circle-down">fa-solid fa-chevron-circle-down</option>
                                        <option value="fa-solid fa-circle-chevron-down" data-icon="fa-solid fa-circle-chevron-down">fa-solid fa-circle-chevron-down</option>
                                        <option value="fa-solid fa-unlock-alt" data-icon="fa-solid fa-unlock-alt">fa-solid fa-unlock-alt</option>
                                        <option value="fa-solid fa-unlock-keyhole" data-icon="fa-solid fa-unlock-keyhole">fa-solid fa-unlock-keyhole</option>
                                        <option value="fa-solid fa-cloud-showers-heavy" data-icon="fa-solid fa-cloud-showers-heavy">fa-solid fa-cloud-showers-heavy</option>
                                        <option value="fa-solid fa-headphones-alt" data-icon="fa-solid fa-headphones-alt">fa-solid fa-headphones-alt</option>
                                        <option value="fa-solid fa-headphones-simple" data-icon="fa-solid fa-headphones-simple">fa-solid fa-headphones-simple</option>
                                        <option value="fa-solid fa-sitemap" data-icon="fa-solid fa-sitemap">fa-solid fa-sitemap</option>
                                        <option value="fa-solid fa-circle-dollar-to-slot" data-icon="fa-solid fa-circle-dollar-to-slot">fa-solid fa-circle-dollaroption>span></li>
                                        <option value="fa-solid fa-donate" data-icon="fa-solid fa-donate">fa-solid fa-donate</option>
                                        <option value="fa-solid fa-memory" data-icon="fa-solid fa-memory">fa-solid fa-memory</option>
                                        <option value="fa-solid fa-road-spikes" data-icon="fa-solid fa-road-spikes">fa-solid fa-road-spikes</option>
                                        <option value="fa-solid fa-fire-burner" data-icon="fa-solid fa-fire-burner">fa-solid fa-fire-burner</option>
                                        <option value="fa-solid fa-flag" data-icon="fa-solid fa-flag">fa-solid fa-flag</option>
                                        <option value="fa-solid fa-hanukiah" data-icon="fa-solid fa-hanukiah">fa-solid fa-hanukiah</option>
                                        <option value="fa-solid fa-feather" data-icon="fa-solid fa-feather">fa-solid fa-feather</option>
                                        <option value="fa-solid fa-volume-down" data-icon="fa-solid fa-volume-down">fa-solid fa-volume-down</option>
                                        <option value="fa-solid fa-volume-low" data-icon="fa-solid fa-volume-low">fa-solid fa-volume-low</option>
                                        <option value="fa-solid fa-comment-slash" data-icon="fa-solid fa-comment-slash">fa-solid fa-comment-slash</option>
                                        <option value="fa-solid fa-cloud-sun-rain" data-icon="fa-solid fa-cloud-sun-rain">fa-solid fa-cloud-sun-rain</option>
                                        <option value="fa-solid fa-compress" data-icon="fa-solid fa-compress">fa-solid fa-compress</option>
                                        <option value="fa-solid fa-wheat-alt" data-icon="fa-solid fa-wheat-alt">fa-solid fa-wheat-alt</option>
                                        <option value="fa-solid fa-wheat-awn" data-icon="fa-solid fa-wheat-awn">fa-solid fa-wheat-awn</option>
                                        <option value="fa-solid fa-ankh" data-icon="fa-solid fa-ankh">fa-solid fa-ankh</option>
                                        <option value="fa-solid fa-hands-holding-child" data-icon="fa-solid fa-hands-holding-child">fa-solid fa-hands-holding-child</option>
                                        <option value="fa-solid fa-asterisk" data-icon="fa-solid fa-asterisk">fa-solid fa-asterisk</option>
                                        <option value="fa-solid fa-check-square" data-icon="fa-solid fa-check-square">fa-solid fa-check-square</option>
                                        <option value="fa-solid fa-square-check" data-icon="fa-solid fa-square-check">fa-solid fa-square-check</option>
                                        <option value="fa-solid fa-peseta-sign" data-icon="fa-solid fa-peseta-sign">fa-solid fa-peseta-sign</option>
                                        <option value="fa-solid fa-header" data-icon="fa-solid fa-header">fa-solid fa-header</option>
                                        <option value="fa-solid fa-heading" data-icon="fa-solid fa-heading">fa-solid fa-heading</option>
                                        <option value="fa-solid fa-ghost" data-icon="fa-solid fa-ghost">fa-solid fa-ghost</option>
                                        <option value="fa-solid fa-list-squares" data-icon="fa-solid fa-list-squares">fa-solid fa-list-squares</option>
                                        <option value="fa-solid fa-list" data-icon="fa-solid fa-list">fa-solid fa-list</option>
                                        <option value="fa-solid fa-phone-square-alt" data-icon="fa-solid fa-phone-square-alt">fa-solid fa-phone-square-alt</option>
                                        <option value="fa-solid fa-square-phone-flip" data-icon="fa-solid fa-square-phone-flip">fa-solid fa-square-phone-flip</option>
                                        <option value="fa-solid fa-cart-plus" data-icon="fa-solid fa-cart-plus">fa-solid fa-cart-plus</option>
                                        <option value="fa-solid fa-gamepad" data-icon="fa-solid fa-gamepad">fa-solid fa-gamepad</option>
                                        <option value="fa-solid fa-circle-dot" data-icon="fa-solid fa-circle-dot">fa-solid fa-circle-dot</option>
                                        <option value="fa-solid fa-dot-circle" data-icon="fa-solid fa-dot-circle">fa-solid fa-dot-circle</option>
                                        <option value="fa-solid fa-dizzy" data-icon="fa-solid fa-dizzy">fa-solid fa-dizzy</option>
                                        <option value="fa-solid fa-face-dizzy" data-icon="fa-solid fa-face-dizzy">fa-solid fa-face-dizzy</option>
                                        <option value="fa-solid fa-egg" data-icon="fa-solid fa-egg">fa-solid fa-egg</option>
                                        <option value="fa-solid fa-house-medical-circle-xmark" data-icon="fa-solid fa-house-medical-circle-xmark"option>fa-house-medical-circle-xmark</span></li>
                                        <option value="fa-solid fa-campground" data-icon="fa-solid fa-campground">fa-solid fa-campground</option>
                                        <option value="fa-solid fa-folder-plus" data-icon="fa-solid fa-folder-plus">fa-solid fa-folder-plus</option>
                                        <option value="fa-solid fa-futbol-ball" data-icon="fa-solid fa-futbol-ball">fa-solid fa-futbol-ball</option>
                                        <option value="fa-solid fa-futbol" data-icon="fa-solid fa-futbol">fa-solid fa-futbol</option>
                                        <option value="fa-solid fa-soccer-ball" data-icon="fa-solid fa-soccer-ball">fa-solid fa-soccer-ball</option>
                                        <option value="fa-solid fa-paint-brush" data-icon="fa-solid fa-paint-brush">fa-solid fa-paint-brush</option>
                                        <option value="fa-solid fa-paintbrush" data-icon="fa-solid fa-paintbrush">fa-solid fa-paintbrush</option>
                                        <option value="fa-solid fa-lock" data-icon="fa-solid fa-lock">fa-solid fa-lock</option>
                                        <option value="fa-solid fa-gas-pump" data-icon="fa-solid fa-gas-pump">fa-solid fa-gas-pump</option>
                                        <option value="fa-solid fa-hot-tub-person" data-icon="fa-solid fa-hot-tub-person">fa-solid fa-hot-tub-person</option>
                                        <option value="fa-solid fa-hot-tub" data-icon="fa-solid fa-hot-tub">fa-solid fa-hot-tub</option>
                                        <option value="fa-solid fa-map-location" data-icon="fa-solid fa-map-location">fa-solid fa-map-location</option>
                                        <option value="fa-solid fa-map-marked" data-icon="fa-solid fa-map-marked">fa-solid fa-map-marked</option>
                                        <option value="fa-solid fa-house-flood-water" data-icon="fa-solid fa-house-flood-water">fa-solid fa-house-flood-water</option>
                                        <option value="fa-solid fa-tree" data-icon="fa-solid fa-tree">fa-solid fa-tree</option>
                                        <option value="fa-solid fa-bridge-lock" data-icon="fa-solid fa-bridge-lock">fa-solid fa-bridge-lock</option>
                                        <option value="fa-solid fa-sack-dollar" data-icon="fa-solid fa-sack-dollar">fa-solid fa-sack-dollar</option>
                                        <option value="fa-solid fa-edit" data-icon="fa-solid fa-edit">fa-solid fa-edit</option>
                                        <option value="fa-solid fa-pen-to-square" data-icon="fa-solid fa-pen-to-square">fa-solid fa-pen-to-square</option>
                                        <option value="fa-solid fa-car-side" data-icon="fa-solid fa-car-side">fa-solid fa-car-side</option>
                                        <option value="fa-solid fa-share-alt" data-icon="fa-solid fa-share-alt">fa-solid fa-share-alt</option>
                                        <option value="fa-solid fa-share-nodes" data-icon="fa-solid fa-share-nodes">fa-solid fa-share-nodes</option>
                                        <option value="fa-solid fa-heart-circle-minus" data-icon="fa-solid fa-heart-circle-minus">fa-solid fa-heart-circle-minus</option>
                                        <option value="fa-solid fa-hourglass-2" data-icon="fa-solid fa-hourglass-2">fa-solid fa-hourglass-2</option>
                                        <option value="fa-solid fa-hourglass-half" data-icon="fa-solid fa-hourglass-half">fa-solid fa-hourglass-half</option>
                                        <option value="fa-solid fa-microscope" data-icon="fa-solid fa-microscope">fa-solid fa-microscope</option>
                                        <option value="fa-solid fa-sink" data-icon="fa-solid fa-sink">fa-solid fa-sink</option>
                                        <option value="fa-solid fa-bag-shopping" data-icon="fa-solid fa-bag-shopping">fa-solid fa-bag-shopping</option>
                                        <option value="fa-solid fa-shopping-bag" data-icon="fa-solid fa-shopping-bag">fa-solid fa-shopping-bag</option>
                                        <option value="fa-solid fa-arrow-down-z-a" data-icon="fa-solid fa-arrow-down-z-a">fa-solid fa-arrow-down-z-a</option>
                                        <option value="fa-solid fa-sort-alpha-desc" data-icon="fa-solid fa-sort-alpha-desc">fa-solid fa-sort-alpha-desc</option>
                                        <option value="fa-solid fa-sort-alpha-down-alt" data-icon="fa-solid fa-sort-alpha-down-alt">fa-solid fa-sort-alpha-down-alt</option>
                                        <option value="fa-solid fa-mitten" data-icon="fa-solid fa-mitten">fa-solid fa-mitten</option>
                                        <option value="fa-solid fa-person-rays" data-icon="fa-solid fa-person-rays">fa-solid fa-person-rays</option>
                                        <option value="fa-solid fa-users" data-icon="fa-solid fa-users">fa-solid fa-users</option>
                                        <option value="fa-solid fa-eye-slash" data-icon="fa-solid fa-eye-slash">fa-solid fa-eye-slash</option>
                                        <option value="fa-solid fa-flask-vial" data-icon="fa-solid fa-flask-vial">fa-solid fa-flask-vial</option>
                                        <option value="fa-solid fa-hand-paper" data-icon="fa-solid fa-hand-paper">fa-solid fa-hand-paper</option>
                                        <option value="fa-solid fa-hand" data-icon="fa-solid fa-hand">fa-solid fa-hand</option>
                                        <option value="fa-solid fa-om" data-icon="fa-solid fa-om">fa-solid fa-om</option>
                                        <option value="fa-solid fa-worm" data-icon="fa-solid fa-worm">fa-solid fa-worm</option>
                                        <option value="fa-solid fa-house-circle-xmark" data-icon="fa-solid fa-house-circle-xmark">fa-solid fa-house-circle-xmark</option>
                                        <option value="fa-solid fa-plug" data-icon="fa-solid fa-plug">fa-solid fa-plug</option>
                                        <option value="fa-solid fa-chevron-up" data-icon="fa-solid fa-chevron-up">fa-solid fa-chevron-up</option>
                                        <option value="fa-solid fa-hand-spock" data-icon="fa-solid fa-hand-spock">fa-solid fa-hand-spock</option>
                                        <option value="fa-solid fa-stopwatch" data-icon="fa-solid fa-stopwatch">fa-solid fa-stopwatch</option>
                                        <option value="fa-solid fa-face-kiss" data-icon="fa-solid fa-face-kiss">fa-solid fa-face-kiss</option>
                                        <option value="fa-solid fa-kiss" data-icon="fa-solid fa-kiss">fa-solid fa-kiss</option>
                                        <option value="fa-solid fa-bridge-circle-xmark" data-icon="fa-solid fa-bridge-circle-xmark">fa-solid fa-bridge-circle-xmark</option>
                                        <option value="fa-solid fa-face-grin-tongue" data-icon="fa-solid fa-face-grin-tongue">fa-solid fa-face-grin-tongue</option>
                                        <option value="fa-solid fa-grin-tongue" data-icon="fa-solid fa-grin-tongue">fa-solid fa-grin-tongue</option>
                                        <option value="fa-solid fa-chess-bishop" data-icon="fa-solid fa-chess-bishop">fa-solid fa-chess-bishop</option>
                                        <option value="fa-solid fa-face-grin-wink" data-icon="fa-solid fa-face-grin-wink">fa-solid fa-face-grin-wink</option>
                                        <option value="fa-solid fa-grin-wink" data-icon="fa-solid fa-grin-wink">fa-solid fa-grin-wink</option>
                                        <option value="fa-solid fa-deaf" data-icon="fa-solid fa-deaf">fa-solid fa-deaf</option>
                                        <option value="fa-solid fa-deafness" data-icon="fa-solid fa-deafness">fa-solid fa-deafness</option>
                                        <option value="fa-solid fa-ear-deaf" data-icon="fa-solid fa-ear-deaf">fa-solid fa-ear-deaf</option>
                                        <option value="fa-solid fa-hard-of-hearing" data-icon="fa-solid fa-hard-of-hearing">fa-solid fa-hard-of-hearing</option>
                                        <option value="fa-solid fa-road-circle-check" data-icon="fa-solid fa-road-circle-check">fa-solid fa-road-circle-check</option>
                                        <option value="fa-solid fa-dice-five" data-icon="fa-solid fa-dice-five">fa-solid fa-dice-five</option>
                                        <option value="fa-solid fa-rss-square" data-icon="fa-solid fa-rss-square">fa-solid fa-rss-square</option>
                                        <option value="fa-solid fa-square-rss" data-icon="fa-solid fa-square-rss">fa-solid fa-square-rss</option>
                                        <option value="fa-solid fa-land-mine-on" data-icon="fa-solid fa-land-mine-on">fa-solid fa-land-mine-on</option>
                                        <option value="fa-solid fa-i-cursor" data-icon="fa-solid fa-i-cursor">fa-solid fa-i-cursor</option>
                                        <option value="fa-solid fa-stamp" data-icon="fa-solid fa-stamp">fa-solid fa-stamp</option>
                                        <option value="fa-solid fa-stairs" data-icon="fa-solid fa-stairs">fa-solid fa-stairs</option>
                                        <option value="fa-solid fa-i" data-icon="fa-solid fa-i">fa-solid fa-i</option>
                                        <option value="fa-solid fa-hryvnia-sign" data-icon="fa-solid fa-hryvnia-sign">fa-solid fa-hryvnia-sign</option>
                                        <option value="fa-solid fa-hryvnia" data-icon="fa-solid fa-hryvnia">fa-solid fa-hryvnia</option>
                                        <option value="fa-solid fa-pills" data-icon="fa-solid fa-pills">fa-solid fa-pills</option>
                                        <option value="fa-solid fa-face-grin-wide" data-icon="fa-solid fa-face-grin-wide">fa-solid fa-face-grin-wide</option>
                                        <option value="fa-solid fa-grin-alt" data-icon="fa-solid fa-grin-alt">fa-solid fa-grin-alt</option>
                                        <option value="fa-solid fa-tooth" data-icon="fa-solid fa-tooth">fa-solid fa-tooth</option>
                                        <option value="fa-solid fa-v" data-icon="fa-solid fa-v">fa-solid fa-v</option>
                                        <option value="fa-solid fa-bangladeshi-taka-sign" data-icon="fa-solid fa-bangladeshi-taka-sign">fa-solid fa-bangladeshi-toption>span></li>
                                        <option value="fa-solid fa-bicycle" data-icon="fa-solid fa-bicycle">fa-solid fa-bicycle</option>
                                        <option value="fa-solid fa-rod-asclepius" data-icon="fa-solid fa-rod-asclepius">fa-solid fa-rod-asclepius</option>
                                        <option value="fa-solid fa-rod-snake" data-icon="fa-solid fa-rod-snake">fa-solid fa-rod-snake</option>
                                        <option value="fa-solid fa-staff-aesculapius" data-icon="fa-solid fa-staff-aesculapius">fa-solid fa-staff-aesculapius</option>
                                        <option value="fa-solid fa-staff-snake" data-icon="fa-solid fa-staff-snake">fa-solid fa-staff-snake</option>
                                        <option value="fa-solid fa-head-side-cough-slash" data-icon="fa-solid fa-head-side-cough-slash">fa-solid fa-head-side-couoption>span></li>
                                        <option value="fa-solid fa-ambulance" data-icon="fa-solid fa-ambulance">fa-solid fa-ambulance</option>
                                        <option value="fa-solid fa-truck-medical" data-icon="fa-solid fa-truck-medical">fa-solid fa-truck-medical</option>
                                        <option value="fa-solid fa-wheat-awn-circle-exclamation" data-icon="fa-solid fa-wheat-awn-circle-exclamation"option>fa-wheat-awn-circle-exclamation</span></li>
                                        <option value="fa-solid fa-snowman" data-icon="fa-solid fa-snowman">fa-solid fa-snowman</option>
                                        <option value="fa-solid fa-mortar-pestle" data-icon="fa-solid fa-mortar-pestle">fa-solid fa-mortar-pestle</option>
                                        <option value="fa-solid fa-road-barrier" data-icon="fa-solid fa-road-barrier">fa-solid fa-road-barrier</option>
                                        <option value="fa-solid fa-school" data-icon="fa-solid fa-school">fa-solid fa-school</option>
                                        <option value="fa-solid fa-igloo" data-icon="fa-solid fa-igloo">fa-solid fa-igloo</option>
                                        <option value="fa-solid fa-joint" data-icon="fa-solid fa-joint">fa-solid fa-joint</option>
                                        <option value="fa-solid fa-angle-right" data-icon="fa-solid fa-angle-right">fa-solid fa-angle-right</option>
                                        <option value="fa-solid fa-horse" data-icon="fa-solid fa-horse">fa-solid fa-horse</option>
                                        <option value="fa-solid fa-q" data-icon="fa-solid fa-q">fa-solid fa-q</option>
                                        <option value="fa-solid fa-g" data-icon="fa-solid fa-g">fa-solid fa-g</option>
                                        <option value="fa-solid fa-notes-medical" data-icon="fa-solid fa-notes-medical">fa-solid fa-notes-medical</option>
                                        <option value="fa-solid fa-temperature-2" data-icon="fa-solid fa-temperature-2">fa-solid fa-temperature-2</option>
                                        <option value="fa-solid fa-temperature-half" data-icon="fa-solid fa-temperature-half">fa-solid fa-temperature-half</option>
                                        <option value="fa-solid fa-thermometer-2" data-icon="fa-solid fa-thermometer-2">fa-solid fa-thermometer-2</option>
                                        <option value="fa-solid fa-thermometer-half" data-icon="fa-solid fa-thermometer-half">fa-solid fa-thermometer-half</option>
                                        <option value="fa-solid fa-dong-sign" data-icon="fa-solid fa-dong-sign">fa-solid fa-dong-sign</option>
                                        <option value="fa-solid fa-capsules" data-icon="fa-solid fa-capsules">fa-solid fa-capsules</option>
                                        <option value="fa-solid fa-poo-bolt" data-icon="fa-solid fa-poo-bolt">fa-solid fa-poo-bolt</option>
                                        <option value="fa-solid fa-poo-storm" data-icon="fa-solid fa-poo-storm">fa-solid fa-poo-storm</option>
                                        <option value="fa-solid fa-face-frown-open" data-icon="fa-solid fa-face-frown-open">fa-solid fa-face-frown-open</option>
                                        <option value="fa-solid fa-frown-open" data-icon="fa-solid fa-frown-open">fa-solid fa-frown-open</option>
                                        <option value="fa-solid fa-hand-point-up" data-icon="fa-solid fa-hand-point-up">fa-solid fa-hand-point-up</option>
                                        <option value="fa-solid fa-money-bill" data-icon="fa-solid fa-money-bill">fa-solid fa-money-bill</option>
                                        <option value="fa-solid fa-bookmark" data-icon="fa-solid fa-bookmark">fa-solid fa-bookmark</option>
                                        <option value="fa-solid fa-align-justify" data-icon="fa-solid fa-align-justify">fa-solid fa-align-justify</option>
                                        <option value="fa-solid fa-umbrella-beach" data-icon="fa-solid fa-umbrella-beach">fa-solid fa-umbrella-beach</option>
                                        <option value="fa-solid fa-helmet-un" data-icon="fa-solid fa-helmet-un">fa-solid fa-helmet-un</option>
                                        <option value="fa-solid fa-bullseye" data-icon="fa-solid fa-bullseye">fa-solid fa-bullseye</option>
                                        <option value="fa-solid fa-bacon" data-icon="fa-solid fa-bacon">fa-solid fa-bacon</option>
                                        <option value="fa-solid fa-hand-point-down" data-icon="fa-solid fa-hand-point-down">fa-solid fa-hand-point-down</option>
                                        <option value="fa-solid fa-arrow-up-from-bracket" data-icon="fa-solid fa-arrow-up-from-bracket">fa-solid fa-arrow-up-fromoption>span></li>
                                        <option value="fa-solid fa-folder-blank" data-icon="fa-solid fa-folder-blank">fa-solid fa-folder-blank</option>
                                        <option value="fa-solid fa-folder" data-icon="fa-solid fa-folder">fa-solid fa-folder</option>
                                        <option value="fa-solid fa-file-medical-alt" data-icon="fa-solid fa-file-medical-alt">fa-solid fa-file-medical-alt</option>
                                        <option value="fa-solid fa-file-waveform" data-icon="fa-solid fa-file-waveform">fa-solid fa-file-waveform</option>
                                        <option value="fa-solid fa-radiation" data-icon="fa-solid fa-radiation">fa-solid fa-radiation</option>
                                        <option value="fa-solid fa-chart-simple" data-icon="fa-solid fa-chart-simple">fa-solid fa-chart-simple</option>
                                        <option value="fa-solid fa-mars-stroke" data-icon="fa-solid fa-mars-stroke">fa-solid fa-mars-stroke</option>
                                        <option value="fa-solid fa-vial" data-icon="fa-solid fa-vial">fa-solid fa-vial</option>
                                        <option value="fa-solid fa-dashboard" data-icon="fa-solid fa-dashboard">fa-solid fa-dashboard</option>
                                        <option value="fa-solid fa-gauge-med" data-icon="fa-solid fa-gauge-med">fa-solid fa-gauge-med</option>
                                        <option value="fa-solid fa-gauge" data-icon="fa-solid fa-gauge">fa-solid fa-gauge</option>
                                        <option value="fa-solid fa-tachometer-alt-average" data-icon="fa-solid fa-tachometer-alt-average">fa-solid fa-tachometer-altoption>span></li>
                                        <option value="fa-solid fa-magic-wand-sparkles" data-icon="fa-solid fa-magic-wand-sparkles">fa-solid fa-magic-wand-sparkles</option>
                                        <option value="fa-solid fa-wand-magic-sparkles" data-icon="fa-solid fa-wand-magic-sparkles">fa-solid fa-wand-magic-sparkles</option>
                                        <option value="fa-solid fa-e" data-icon="fa-solid fa-e">fa-solid fa-e</option>
                                        <option value="fa-solid fa-pen-alt" data-icon="fa-solid fa-pen-alt">fa-solid fa-pen-alt</option>
                                        <option value="fa-solid fa-pen-clip" data-icon="fa-solid fa-pen-clip">fa-solid fa-pen-clip</option>
                                        <option value="fa-solid fa-bridge-circle-exclamation" data-icon="fa-solid fa-bridge-circle-exclamation"option>fa-bridge-circle-exclamation</span></li>
                                        <option value="fa-solid fa-user" data-icon="fa-solid fa-user">fa-solid fa-user</option>
                                        <option value="fa-solid fa-school-circle-check" data-icon="fa-solid fa-school-circle-check">fa-solid fa-school-circle-check</option>
                                        <option value="fa-solid fa-dumpster" data-icon="fa-solid fa-dumpster">fa-solid fa-dumpster</option>
                                        <option value="fa-solid fa-shuttle-van" data-icon="fa-solid fa-shuttle-van">fa-solid fa-shuttle-van</option>
                                        <option value="fa-solid fa-van-shuttle" data-icon="fa-solid fa-van-shuttle">fa-solid fa-van-shuttle</option>
                                        <option value="fa-solid fa-building-user" data-icon="fa-solid fa-building-user">fa-solid fa-building-user</option>
                                        <option value="fa-solid fa-caret-square-left" data-icon="fa-solid fa-caret-square-left">fa-solid fa-caret-square-left</option>
                                        <option value="fa-solid fa-square-caret-left" data-icon="fa-solid fa-square-caret-left">fa-solid fa-square-caret-left</option>
                                        <option value="fa-solid fa-highlighter" data-icon="fa-solid fa-highlighter">fa-solid fa-highlighter</option>
                                        <option value="fa-solid fa-key" data-icon="fa-solid fa-key">fa-solid fa-key</option>
                                        <option value="fa-solid fa-bullhorn" data-icon="fa-solid fa-bullhorn">fa-solid fa-bullhorn</option>
                                        <option value="fa-solid fa-globe" data-icon="fa-solid fa-globe">fa-solid fa-globe</option>
                                        <option value="fa-solid fa-synagogue" data-icon="fa-solid fa-synagogue">fa-solid fa-synagogue</option>
                                        <option value="fa-solid fa-person-half-dress" data-icon="fa-solid fa-person-half-dress">fa-solid fa-person-half-dress</option>
                                        <option value="fa-solid fa-road-bridge" data-icon="fa-solid fa-road-bridge">fa-solid fa-road-bridge</option>
                                        <option value="fa-solid fa-location-arrow" data-icon="fa-solid fa-location-arrow">fa-solid fa-location-arrow</option>
                                        <option value="fa-solid fa-c" data-icon="fa-solid fa-c">fa-solid fa-c</option>
                                        <option value="fa-solid fa-tablet-button" data-icon="fa-solid fa-tablet-button">fa-solid fa-tablet-button</option>
                                        <option value="fa-solid fa-building-lock" data-icon="fa-solid fa-building-lock">fa-solid fa-building-lock</option>
                                        <option value="fa-solid fa-pizza-slice" data-icon="fa-solid fa-pizza-slice">fa-solid fa-pizza-slice</option>
                                        <option value="fa-solid fa-money-bill-wave" data-icon="fa-solid fa-money-bill-wave">fa-solid fa-money-bill-wave</option>
                                        <option value="fa-solid fa-area-chart" data-icon="fa-solid fa-area-chart">fa-solid fa-area-chart</option>
                                        <option value="fa-solid fa-chart-area" data-icon="fa-solid fa-chart-area">fa-solid fa-chart-area</option>
                                        <option value="fa-solid fa-house-flag" data-icon="fa-solid fa-house-flag">fa-solid fa-house-flag</option>
                                        <option value="fa-solid fa-person-circle-minus" data-icon="fa-solid fa-person-circle-minus">fa-solid fa-person-circle-minus</option>
                                        <option value="fa-solid fa-ban" data-icon="fa-solid fa-ban">fa-solid fa-ban</option>
                                        <option value="fa-solid fa-cancel" data-icon="fa-solid fa-cancel">fa-solid fa-cancel</option>
                                        <option value="fa-solid fa-camera-rotate" data-icon="fa-solid fa-camera-rotate">fa-solid fa-camera-rotate</option>
                                        <option value="fa-solid fa-air-freshener" data-icon="fa-solid fa-air-freshener">fa-solid fa-air-freshener</option>
                                        <option value="fa-solid fa-spray-can-sparkles" data-icon="fa-solid fa-spray-can-sparkles">fa-solid fa-spray-can-sparkles</option>
                                        <option value="fa-solid fa-star" data-icon="fa-solid fa-star">fa-solid fa-star</option>
                                        <option value="fa-solid fa-repeat" data-icon="fa-solid fa-repeat">fa-solid fa-repeat</option>
                                        <option value="fa-solid fa-cross" data-icon="fa-solid fa-cross">fa-solid fa-cross</option>
                                        <option value="fa-solid fa-box" data-icon="fa-solid fa-box">fa-solid fa-box</option>
                                        <option value="fa-solid fa-venus-mars" data-icon="fa-solid fa-venus-mars">fa-solid fa-venus-mars</option>
                                        <option value="fa-solid fa-arrow-pointer" data-icon="fa-solid fa-arrow-pointer">fa-solid fa-arrow-pointer</option>
                                        <option value="fa-solid fa-mouse-pointer" data-icon="fa-solid fa-mouse-pointer">fa-solid fa-mouse-pointer</option>
                                        <option value="fa-solid fa-expand-arrows-alt" data-icon="fa-solid fa-expand-arrows-alt">fa-solid fa-expand-arrows-alt</option>
                                        <option value="fa-solid fa-maximize" data-icon="fa-solid fa-maximize">fa-solid fa-maximize</option>
                                        <option value="fa-solid fa-charging-station" data-icon="fa-solid fa-charging-station">fa-solid fa-charging-station</option>
                                        <option value="fa-solid fa-shapes" data-icon="fa-solid fa-shapes">fa-solid fa-shapes</option>
                                        <option value="fa-solid fa-triangle-circle-square" data-icon="fa-solid fa-triangle-circle-square">fa-solid fa-triangle-circloption>span></li>
                                        <option value="fa-solid fa-random" data-icon="fa-solid fa-random">fa-solid fa-random</option>
                                        <option value="fa-solid fa-shuffle" data-icon="fa-solid fa-shuffle">fa-solid fa-shuffle</option>
                                        <option value="fa-solid fa-person-running" data-icon="fa-solid fa-person-running">fa-solid fa-person-running</option>
                                        <option value="fa-solid fa-running" data-icon="fa-solid fa-running">fa-solid fa-running</option>
                                        <option value="fa-solid fa-mobile-retro" data-icon="fa-solid fa-mobile-retro">fa-solid fa-mobile-retro</option>
                                        <option value="fa-solid fa-grip-lines-vertical" data-icon="fa-solid fa-grip-lines-vertical">fa-solid fa-grip-lines-vertical</option>
                                        <option value="fa-solid fa-spider" data-icon="fa-solid fa-spider">fa-solid fa-spider</option>
                                        <option value="fa-solid fa-hands-bound" data-icon="fa-solid fa-hands-bound">fa-solid fa-hands-bound</option>
                                        <option value="fa-solid fa-file-invoice-dollar" data-icon="fa-solid fa-file-invoice-dollar">fa-solid fa-file-invoice-dollar</option>
                                        <option value="fa-solid fa-plane-circle-exclamation" data-icon="fa-solid fa-plane-circle-exclamation"option>fa-plane-circle-exclamation</span></li>
                                        <option value="fa-solid fa-x-ray" data-icon="fa-solid fa-x-ray">fa-solid fa-x-ray</option>
                                        <option value="fa-solid fa-spell-check" data-icon="fa-solid fa-spell-check">fa-solid fa-spell-check</option>
                                        <option value="fa-solid fa-slash" data-icon="fa-solid fa-slash">fa-solid fa-slash</option>
                                        <option value="fa-solid fa-computer-mouse" data-icon="fa-solid fa-computer-mouse">fa-solid fa-computer-mouse</option>
                                        <option value="fa-solid fa-mouse" data-icon="fa-solid fa-mouse">fa-solid fa-mouse</option>
                                        <option value="fa-solid fa-arrow-right-to-bracket" data-icon="fa-solid fa-arrow-right-to-bracket">fa-solid fa-arrow-right-tooption>span></li>
                                        <option value="fa-solid fa-sign-in" data-icon="fa-solid fa-sign-in">fa-solid fa-sign-in</option>
                                        <option value="fa-solid fa-shop-slash" data-icon="fa-solid fa-shop-slash">fa-solid fa-shop-slash</option>
                                        <option value="fa-solid fa-store-alt-slash" data-icon="fa-solid fa-store-alt-slash">fa-solid fa-store-alt-slash</option>
                                        <option value="fa-solid fa-server" data-icon="fa-solid fa-server">fa-solid fa-server</option>
                                        <option value="fa-solid fa-virus-covid-slash" data-icon="fa-solid fa-virus-covid-slash">fa-solid fa-virus-covid-slash</option>
                                        <option value="fa-solid fa-shop-lock" data-icon="fa-solid fa-shop-lock">fa-solid fa-shop-lock</option>
                                        <option value="fa-solid fa-hourglass-1" data-icon="fa-solid fa-hourglass-1">fa-solid fa-hourglass-1</option>
                                        <option value="fa-solid fa-hourglass-start" data-icon="fa-solid fa-hourglass-start">fa-solid fa-hourglass-start</option>
                                        <option value="fa-solid fa-blender-phone" data-icon="fa-solid fa-blender-phone">fa-solid fa-blender-phone</option>
                                        <option value="fa-solid fa-building-wheat" data-icon="fa-solid fa-building-wheat">fa-solid fa-building-wheat</option>
                                        <option value="fa-solid fa-person-breastfeeding" data-icon="fa-solid fa-person-breastfeeding">fa-solid fa-person-breastfeedinoption>li>
                                        <option value="fa-solid fa-right-to-bracket" data-icon="fa-solid fa-right-to-bracket">fa-solid fa-right-to-bracket</option>
                                        <option value="fa-solid fa-sign-in-alt" data-icon="fa-solid fa-sign-in-alt">fa-solid fa-sign-in-alt</option>
                                        <option value="fa-solid fa-venus" data-icon="fa-solid fa-venus">fa-solid fa-venus</option>
                                        <option value="fa-solid fa-passport" data-icon="fa-solid fa-passport">fa-solid fa-passport</option>
                                        <option value="fa-solid fa-heart-pulse" data-icon="fa-solid fa-heart-pulse">fa-solid fa-heart-pulse</option>
                                        <option value="fa-solid fa-heartbeat" data-icon="fa-solid fa-heartbeat">fa-solid fa-heartbeat</option>
                                        <option value="fa-solid fa-people-carry-box" data-icon="fa-solid fa-people-carry-box">fa-solid fa-people-carry-box</option>
                                        <option value="fa-solid fa-people-carry" data-icon="fa-solid fa-people-carry">fa-solid fa-people-carry</option>
                                        <option value="fa-solid fa-temperature-high" data-icon="fa-solid fa-temperature-high">fa-solid fa-temperature-high</option>
                                        <option value="fa-solid fa-microchip" data-icon="fa-solid fa-microchip">fa-solid fa-microchip</option>
                                        <option value="fa-solid fa-crown" data-icon="fa-solid fa-crown">fa-solid fa-crown</option>
                                        <option value="fa-solid fa-weight-hanging" data-icon="fa-solid fa-weight-hanging">fa-solid fa-weight-hanging</option>
                                        <option value="fa-solid fa-xmarks-lines" data-icon="fa-solid fa-xmarks-lines">fa-solid fa-xmarks-lines</option>
                                        <option value="fa-solid fa-file-prescription" data-icon="fa-solid fa-file-prescription">fa-solid fa-file-prescription</option>
                                        <option value="fa-solid fa-weight-scale" data-icon="fa-solid fa-weight-scale">fa-solid fa-weight-scale</option>
                                        <option value="fa-solid fa-weight" data-icon="fa-solid fa-weight">fa-solid fa-weight</option>
                                        <option value="fa-solid fa-user-friends" data-icon="fa-solid fa-user-friends">fa-solid fa-user-friends</option>
                                        <option value="fa-solid fa-user-group" data-icon="fa-solid fa-user-group">fa-solid fa-user-group</option>
                                        <option value="fa-solid fa-arrow-up-a-z" data-icon="fa-solid fa-arrow-up-a-z">fa-solid fa-arrow-up-a-z</option>
                                        <option value="fa-solid fa-sort-alpha-up" data-icon="fa-solid fa-sort-alpha-up">fa-solid fa-sort-alpha-up</option>
                                        <option value="fa-solid fa-chess-knight" data-icon="fa-solid fa-chess-knight">fa-solid fa-chess-knight</option>
                                        <option value="fa-solid fa-face-laugh-squint" data-icon="fa-solid fa-face-laugh-squint">fa-solid fa-face-laugh-squint</option>
                                        <option value="fa-solid fa-laugh-squint" data-icon="fa-solid fa-laugh-squint">fa-solid fa-laugh-squint</option>
                                        <option value="fa-solid fa-wheelchair" data-icon="fa-solid fa-wheelchair">fa-solid fa-wheelchair</option>
                                        <option value="fa-solid fa-arrow-circle-up" data-icon="fa-solid fa-arrow-circle-up">fa-solid fa-arrow-circle-up</option>
                                        <option value="fa-solid fa-circle-arrow-up" data-icon="fa-solid fa-circle-arrow-up">fa-solid fa-circle-arrow-up</option>
                                        <option value="fa-solid fa-toggle-on" data-icon="fa-solid fa-toggle-on">fa-solid fa-toggle-on</option>
                                        <option value="fa-solid fa-person-walking" data-icon="fa-solid fa-person-walking">fa-solid fa-person-walking</option>
                                        <option value="fa-solid fa-walking" data-icon="fa-solid fa-walking">fa-solid fa-walking</option>
                                        <option value="fa-solid fa-l" data-icon="fa-solid fa-l">fa-solid fa-l</option>
                                        <option value="fa-solid fa-fire" data-icon="fa-solid fa-fire">fa-solid fa-fire</option>
                                        <option value="fa-solid fa-bed-pulse" data-icon="fa-solid fa-bed-pulse">fa-solid fa-bed-pulse</option>
                                        <option value="fa-solid fa-procedures" data-icon="fa-solid fa-procedures">fa-solid fa-procedures</option>
                                        <option value="fa-solid fa-shuttle-space" data-icon="fa-solid fa-shuttle-space">fa-solid fa-shuttle-space</option>
                                        <option value="fa-solid fa-space-shuttle" data-icon="fa-solid fa-space-shuttle">fa-solid fa-space-shuttle</option>
                                        <option value="fa-solid fa-face-laugh" data-icon="fa-solid fa-face-laugh">fa-solid fa-face-laugh</option>
                                        <option value="fa-solid fa-laugh" data-icon="fa-solid fa-laugh">fa-solid fa-laugh</option>
                                        <option value="fa-solid fa-folder-open" data-icon="fa-solid fa-folder-open">fa-solid fa-folder-open</option>
                                        <option value="fa-solid fa-heart-circle-plus" data-icon="fa-solid fa-heart-circle-plus">fa-solid fa-heart-circle-plus</option>
                                        <option value="fa-solid fa-code-fork" data-icon="fa-solid fa-code-fork">fa-solid fa-code-fork</option>
                                        <option value="fa-solid fa-city" data-icon="fa-solid fa-city">fa-solid fa-city</option>
                                        <option value="fa-solid fa-microphone-alt" data-icon="fa-solid fa-microphone-alt">fa-solid fa-microphone-alt</option>
                                        <option value="fa-solid fa-microphone-lines" data-icon="fa-solid fa-microphone-lines">fa-solid fa-microphone-lines</option>
                                        <option value="fa-solid fa-pepper-hot" data-icon="fa-solid fa-pepper-hot">fa-solid fa-pepper-hot</option>
                                        <option value="fa-solid fa-unlock" data-icon="fa-solid fa-unlock">fa-solid fa-unlock</option>
                                        <option value="fa-solid fa-colon-sign" data-icon="fa-solid fa-colon-sign">fa-solid fa-colon-sign</option>
                                        <option value="fa-solid fa-headset" data-icon="fa-solid fa-headset">fa-solid fa-headset</option>
                                        <option value="fa-solid fa-store-slash" data-icon="fa-solid fa-store-slash">fa-solid fa-store-slash</option>
                                        <option value="fa-solid fa-road-circle-xmark" data-icon="fa-solid fa-road-circle-xmark">fa-solid fa-road-circle-xmark</option>
                                        <option value="fa-solid fa-user-minus" data-icon="fa-solid fa-user-minus">fa-solid fa-user-minus</option>
                                        <option value="fa-solid fa-mars-stroke-up" data-icon="fa-solid fa-mars-stroke-up">fa-solid fa-mars-stroke-up</option>
                                        <option value="fa-solid fa-mars-stroke-v" data-icon="fa-solid fa-mars-stroke-v">fa-solid fa-mars-stroke-v</option>
                                        <option value="fa-solid fa-champagne-glasses" data-icon="fa-solid fa-champagne-glasses">fa-solid fa-champagne-glasses</option>
                                        <option value="fa-solid fa-glass-cheers" data-icon="fa-solid fa-glass-cheers">fa-solid fa-glass-cheers</option>
                                        <option value="fa-solid fa-clipboard" data-icon="fa-solid fa-clipboard">fa-solid fa-clipboard</option>
                                        <option value="fa-solid fa-house-circle-exclamation" data-icon="fa-solid fa-house-circle-exclamation"option>fa-house-circle-exclamation</span></li>
                                        <option value="fa-solid fa-file-arrow-up" data-icon="fa-solid fa-file-arrow-up">fa-solid fa-file-arrow-up</option>
                                        <option value="fa-solid fa-file-upload" data-icon="fa-solid fa-file-upload">fa-solid fa-file-upload</option>
                                        <option value="fa-solid fa-wifi-3" data-icon="fa-solid fa-wifi-3">fa-solid fa-wifi-3</option>
                                        <option value="fa-solid fa-wifi-strong" data-icon="fa-solid fa-wifi-strong">fa-solid fa-wifi-strong</option>
                                        <option value="fa-solid fa-wifi" data-icon="fa-solid fa-wifi">fa-solid fa-wifi</option>
                                        <option value="fa-solid fa-bath" data-icon="fa-solid fa-bath">fa-solid fa-bath</option>
                                        <option value="fa-solid fa-bathtub" data-icon="fa-solid fa-bathtub">fa-solid fa-bathtub</option>
                                        <option value="fa-solid fa-underline" data-icon="fa-solid fa-underline">fa-solid fa-underline</option>
                                        <option value="fa-solid fa-user-edit" data-icon="fa-solid fa-user-edit">fa-solid fa-user-edit</option>
                                        <option value="fa-solid fa-user-pen" data-icon="fa-solid fa-user-pen">fa-solid fa-user-pen</option>
                                        <option value="fa-solid fa-signature" data-icon="fa-solid fa-signature">fa-solid fa-signature</option>
                                        <option value="fa-solid fa-stroopwafel" data-icon="fa-solid fa-stroopwafel">fa-solid fa-stroopwafel</option>
                                        <option value="fa-solid fa-bold" data-icon="fa-solid fa-bold">fa-solid fa-bold</option>
                                        <option value="fa-solid fa-anchor-lock" data-icon="fa-solid fa-anchor-lock">fa-solid fa-anchor-lock</option>
                                        <option value="fa-solid fa-building-ngo" data-icon="fa-solid fa-building-ngo">fa-solid fa-building-ngo</option>
                                        <option value="fa-solid fa-manat-sign" data-icon="fa-solid fa-manat-sign">fa-solid fa-manat-sign</option>
                                        <option value="fa-solid fa-not-equal" data-icon="fa-solid fa-not-equal">fa-solid fa-not-equal</option>
                                        <option value="fa-solid fa-border-style" data-icon="fa-solid fa-border-style">fa-solid fa-border-style</option>
                                        <option value="fa-solid fa-border-top-left" data-icon="fa-solid fa-border-top-left">fa-solid fa-border-top-left</option>
                                        <option value="fa-solid fa-map-location-dot" data-icon="fa-solid fa-map-location-dot">fa-solid fa-map-location-dot</option>
                                        <option value="fa-solid fa-map-marked-alt" data-icon="fa-solid fa-map-marked-alt">fa-solid fa-map-marked-alt</option>
                                        <option value="fa-solid fa-jedi" data-icon="fa-solid fa-jedi">fa-solid fa-jedi</option>
                                        <option value="fa-solid fa-poll" data-icon="fa-solid fa-poll">fa-solid fa-poll</option>
                                        <option value="fa-solid fa-square-poll-vertical" data-icon="fa-solid fa-square-poll-vertical">fa-solid fa-square-poll-verticaoption>li>
                                        <option value="fa-solid fa-mug-hot" data-icon="fa-solid fa-mug-hot">fa-solid fa-mug-hot</option>
                                        <option value="fa-solid fa-battery-car" data-icon="fa-solid fa-battery-car">fa-solid fa-battery-car</option>
                                        <option value="fa-solid fa-car-battery" data-icon="fa-solid fa-car-battery">fa-solid fa-car-battery</option>
                                        <option value="fa-solid fa-gift" data-icon="fa-solid fa-gift">fa-solid fa-gift</option>
                                        <option value="fa-solid fa-dice-two" data-icon="fa-solid fa-dice-two">fa-solid fa-dice-two</option>
                                        <option value="fa-solid fa-chess-queen" data-icon="fa-solid fa-chess-queen">fa-solid fa-chess-queen</option>
                                        <option value="fa-solid fa-glasses" data-icon="fa-solid fa-glasses">fa-solid fa-glasses</option>
                                        <option value="fa-solid fa-chess-board" data-icon="fa-solid fa-chess-board">fa-solid fa-chess-board</option>
                                        <option value="fa-solid fa-building-circle-check" data-icon="fa-solid fa-building-circle-check">fa-solid fa-building-circoption>span></li>
                                        <option value="fa-solid fa-person-chalkboard" data-icon="fa-solid fa-person-chalkboard">fa-solid fa-person-chalkboard</option>
                                        <option value="fa-solid fa-mars-stroke-h" data-icon="fa-solid fa-mars-stroke-h">fa-solid fa-mars-stroke-h</option>
                                        <option value="fa-solid fa-mars-stroke-right" data-icon="fa-solid fa-mars-stroke-right">fa-solid fa-mars-stroke-right</option>
                                        <option value="fa-solid fa-hand-back-fist" data-icon="fa-solid fa-hand-back-fist">fa-solid fa-hand-back-fist</option>
                                        <option value="fa-solid fa-hand-rock" data-icon="fa-solid fa-hand-rock">fa-solid fa-hand-rock</option>
                                        <option value="fa-solid fa-caret-square-up" data-icon="fa-solid fa-caret-square-up">fa-solid fa-caret-square-up</option>
                                        <option value="fa-solid fa-square-caret-up" data-icon="fa-solid fa-square-caret-up">fa-solid fa-square-caret-up</option>
                                        <option value="fa-solid fa-cloud-showers-water" data-icon="fa-solid fa-cloud-showers-water">fa-solid fa-cloud-showers-water</option>
                                        <option value="fa-solid fa-bar-chart" data-icon="fa-solid fa-bar-chart">fa-solid fa-bar-chart</option>
                                        <option value="fa-solid fa-chart-bar" data-icon="fa-solid fa-chart-bar">fa-solid fa-chart-bar</option>
                                        <option value="fa-solid fa-hands-bubbles" data-icon="fa-solid fa-hands-bubbles">fa-solid fa-hands-bubbles</option>
                                        <option value="fa-solid fa-hands-wash" data-icon="fa-solid fa-hands-wash">fa-solid fa-hands-wash</option>
                                        <option value="fa-solid fa-less-than-equal" data-icon="fa-solid fa-less-than-equal">fa-solid fa-less-than-equal</option>
                                        <option value="fa-solid fa-train" data-icon="fa-solid fa-train">fa-solid fa-train</option>
                                        <option value="fa-solid fa-eye-low-vision" data-icon="fa-solid fa-eye-low-vision">fa-solid fa-eye-low-vision</option>
                                        <option value="fa-solid fa-low-vision" data-icon="fa-solid fa-low-vision">fa-solid fa-low-vision</option>
                                        <option value="fa-solid fa-crow" data-icon="fa-solid fa-crow">fa-solid fa-crow</option>
                                        <option value="fa-solid fa-sailboat" data-icon="fa-solid fa-sailboat">fa-solid fa-sailboat</option>
                                        <option value="fa-solid fa-window-restore" data-icon="fa-solid fa-window-restore">fa-solid fa-window-restore</option>
                                        <option value="fa-solid fa-plus-square" data-icon="fa-solid fa-plus-square">fa-solid fa-plus-square</option>
                                        <option value="fa-solid fa-square-plus" data-icon="fa-solid fa-square-plus">fa-solid fa-square-plus</option>
                                        <option value="fa-solid fa-torii-gate" data-icon="fa-solid fa-torii-gate">fa-solid fa-torii-gate</option>
                                        <option value="fa-solid fa-frog" data-icon="fa-solid fa-frog">fa-solid fa-frog</option>
                                        <option value="fa-solid fa-bucket" data-icon="fa-solid fa-bucket">fa-solid fa-bucket</option>
                                        <option value="fa-solid fa-image" data-icon="fa-solid fa-image">fa-solid fa-image</option>
                                        <option value="fa-solid fa-microphone" data-icon="fa-solid fa-microphone">fa-solid fa-microphone</option>
                                        <option value="fa-solid fa-cow" data-icon="fa-solid fa-cow">fa-solid fa-cow</option>
                                        <option value="fa-solid fa-caret-up" data-icon="fa-solid fa-caret-up">fa-solid fa-caret-up</option>
                                        <option value="fa-solid fa-screwdriver" data-icon="fa-solid fa-screwdriver">fa-solid fa-screwdriver</option>
                                        <option value="fa-solid fa-folder-closed" data-icon="fa-solid fa-folder-closed">fa-solid fa-folder-closed</option>
                                        <option value="fa-solid fa-house-tsunami" data-icon="fa-solid fa-house-tsunami">fa-solid fa-house-tsunami</option>
                                        <option value="fa-solid fa-square-nfi" data-icon="fa-solid fa-square-nfi">fa-solid fa-square-nfi</option>
                                        <option value="fa-solid fa-arrow-up-from-ground-water" data-icon="fa-solid fa-arrow-up-from-ground-water"option>fa-arrow-up-from-ground-water</span></li>
                                        <option value="fa-solid fa-glass-martini-alt" data-icon="fa-solid fa-glass-martini-alt">fa-solid fa-glass-martini-alt</option>
                                        <option value="fa-solid fa-martini-glass" data-icon="fa-solid fa-martini-glass">fa-solid fa-martini-glass</option>
                                        <option value="fa-solid fa-rotate-back" data-icon="fa-solid fa-rotate-back">fa-solid fa-rotate-back</option>
                                        <option value="fa-solid fa-rotate-backward" data-icon="fa-solid fa-rotate-backward">fa-solid fa-rotate-backward</option>
                                        <option value="fa-solid fa-rotate-left" data-icon="fa-solid fa-rotate-left">fa-solid fa-rotate-left</option>
                                        <option value="fa-solid fa-undo-alt" data-icon="fa-solid fa-undo-alt">fa-solid fa-undo-alt</option>
                                        <option value="fa-solid fa-columns" data-icon="fa-solid fa-columns">fa-solid fa-columns</option>
                                        <option value="fa-solid fa-table-columns" data-icon="fa-solid fa-table-columns">fa-solid fa-table-columns</option>
                                        <option value="fa-solid fa-lemon" data-icon="fa-solid fa-lemon">fa-solid fa-lemon</option>
                                        <option value="fa-solid fa-head-side-mask" data-icon="fa-solid fa-head-side-mask">fa-solid fa-head-side-mask</option>
                                        <option value="fa-solid fa-handshake" data-icon="fa-solid fa-handshake">fa-solid fa-handshake</option>
                                        <option value="fa-solid fa-gem" data-icon="fa-solid fa-gem">fa-solid fa-gem</option>
                                        <option value="fa-solid fa-dolly-box" data-icon="fa-solid fa-dolly-box">fa-solid fa-dolly-box</option>
                                        <option value="fa-solid fa-dolly" data-icon="fa-solid fa-dolly">fa-solid fa-dolly</option>
                                        <option value="fa-solid fa-smoking" data-icon="fa-solid fa-smoking">fa-solid fa-smoking</option>
                                        <option value="fa-solid fa-compress-arrows-alt" data-icon="fa-solid fa-compress-arrows-alt">fa-solid fa-compress-arrows-alt</option>
                                        <option value="fa-solid fa-minimize" data-icon="fa-solid fa-minimize">fa-solid fa-minimize</option>
                                        <option value="fa-solid fa-monument" data-icon="fa-solid fa-monument">fa-solid fa-monument</option>
                                        <option value="fa-solid fa-snowplow" data-icon="fa-solid fa-snowplow">fa-solid fa-snowplow</option>
                                        <option value="fa-solid fa-angle-double-right" data-icon="fa-solid fa-angle-double-right">fa-solid fa-angle-double-right</option>
                                        <option value="fa-solid fa-angles-right" data-icon="fa-solid fa-angles-right">fa-solid fa-angles-right</option>
                                        <option value="fa-solid fa-cannabis" data-icon="fa-solid fa-cannabis">fa-solid fa-cannabis</option>
                                        <option value="fa-solid fa-circle-play" data-icon="fa-solid fa-circle-play">fa-solid fa-circle-play</option>
                                        <option value="fa-solid fa-play-circle" data-icon="fa-solid fa-play-circle">fa-solid fa-play-circle</option>
                                        <option value="fa-solid fa-tablets" data-icon="fa-solid fa-tablets">fa-solid fa-tablets</option>
                                        <option value="fa-solid fa-ethernet" data-icon="fa-solid fa-ethernet">fa-solid fa-ethernet</option>
                                        <option value="fa-solid fa-eur" data-icon="fa-solid fa-eur">fa-solid fa-eur</option>
                                        <option value="fa-solid fa-euro-sign" data-icon="fa-solid fa-euro-sign">fa-solid fa-euro-sign</option>
                                        <option value="fa-solid fa-euro" data-icon="fa-solid fa-euro">fa-solid fa-euro</option>
                                        <option value="fa-solid fa-chair" data-icon="fa-solid fa-chair">fa-solid fa-chair</option>
                                        <option value="fa-solid fa-check-circle" data-icon="fa-solid fa-check-circle">fa-solid fa-check-circle</option>
                                        <option value="fa-solid fa-circle-check" data-icon="fa-solid fa-circle-check">fa-solid fa-circle-check</option>
                                        <option value="fa-solid fa-circle-stop" data-icon="fa-solid fa-circle-stop">fa-solid fa-circle-stop</option>
                                        <option value="fa-solid fa-stop-circle" data-icon="fa-solid fa-stop-circle">fa-solid fa-stop-circle</option>
                                        <option value="fa-solid fa-compass-drafting" data-icon="fa-solid fa-compass-drafting">fa-solid fa-compass-drafting</option>
                                        <option value="fa-solid fa-drafting-compass" data-icon="fa-solid fa-drafting-compass">fa-solid fa-drafting-compass</option>
                                        <option value="fa-solid fa-plate-wheat" data-icon="fa-solid fa-plate-wheat">fa-solid fa-plate-wheat</option>
                                        <option value="fa-solid fa-icicles" data-icon="fa-solid fa-icicles">fa-solid fa-icicles</option>
                                        <option value="fa-solid fa-person-shelter" data-icon="fa-solid fa-person-shelter">fa-solid fa-person-shelter</option>
                                        <option value="fa-solid fa-neuter" data-icon="fa-solid fa-neuter">fa-solid fa-neuter</option>
                                        <option value="fa-solid fa-id-badge" data-icon="fa-solid fa-id-badge">fa-solid fa-id-badge</option>
                                        <option value="fa-solid fa-marker" data-icon="fa-solid fa-marker">fa-solid fa-marker</option>
                                        <option value="fa-solid fa-face-laugh-beam" data-icon="fa-solid fa-face-laugh-beam">fa-solid fa-face-laugh-beam</option>
                                        <option value="fa-solid fa-laugh-beam" data-icon="fa-solid fa-laugh-beam">fa-solid fa-laugh-beam</option>
                                        <option value="fa-solid fa-helicopter-symbol" data-icon="fa-solid fa-helicopter-symbol">fa-solid fa-helicopter-symbol</option>
                                        <option value="fa-solid fa-universal-access" data-icon="fa-solid fa-universal-access">fa-solid fa-universal-access</option>
                                        <option value="fa-solid fa-chevron-circle-up" data-icon="fa-solid fa-chevron-circle-up">fa-solid fa-chevron-circle-up</option>
                                        <option value="fa-solid fa-circle-chevron-up" data-icon="fa-solid fa-circle-chevron-up">fa-solid fa-circle-chevron-up</option>
                                        <option value="fa-solid fa-lari-sign" data-icon="fa-solid fa-lari-sign">fa-solid fa-lari-sign</option>
                                        <option value="fa-solid fa-volcano" data-icon="fa-solid fa-volcano">fa-solid fa-volcano</option>
                                        <li><i class="fa-solid fa-person-walking-dashed-line-arrow-right" data-icon="fa-solid <option-valued-line-arrow-right"option>fa-person-walking-dashed-line-arrow-right</span></li>
                                        <option value="fa-solid fa-gbp" data-icon="fa-solid fa-gbp">fa-solid fa-gbp</option>
                                        <option value="fa-solid fa-pound-sign" data-icon="fa-solid fa-pound-sign">fa-solid fa-pound-sign</option>
                                        <option value="fa-solid fa-sterling-sign" data-icon="fa-solid fa-sterling-sign">fa-solid fa-sterling-sign</option>
                                        <option value="fa-solid fa-viruses" data-icon="fa-solid fa-viruses">fa-solid fa-viruses</option>
                                        <option value="fa-solid fa-square-person-confined" data-icon="fa-solid fa-square-person-confined">fa-solid fa-square-person-option>span></li>
                                        <option value="fa-solid fa-user-tie" data-icon="fa-solid fa-user-tie">fa-solid fa-user-tie</option>
                                        <option value="fa-solid fa-arrow-down-long" data-icon="fa-solid fa-arrow-down-long">fa-solid fa-arrow-down-long</option>
                                        <option value="fa-solid fa-long-arrow-down" data-icon="fa-solid fa-long-arrow-down">fa-solid fa-long-arrow-down</option>
                                        <option value="fa-solid fa-tent-arrow-down-to-line" data-icon="fa-solid fa-tent-arrow-down-to-line"option>fa-tent-arrow-down-to-line</span></li>
                                        <option value="fa-solid fa-certificate" data-icon="fa-solid fa-certificate">fa-solid fa-certificate</option>
                                        <option value="fa-solid fa-mail-reply-all" data-icon="fa-solid fa-mail-reply-all">fa-solid fa-mail-reply-all</option>
                                        <option value="fa-solid fa-reply-all" data-icon="fa-solid fa-reply-all">fa-solid fa-reply-all</option>
                                        <option value="fa-solid fa-suitcase" data-icon="fa-solid fa-suitcase">fa-solid fa-suitcase</option>
                                        <option value="fa-solid fa-person-skating" data-icon="fa-solid fa-person-skating">fa-solid fa-person-skating</option>
                                        <option value="fa-solid fa-skating" data-icon="fa-solid fa-skating">fa-solid fa-skating</option>
                                        <option value="fa-solid fa-filter-circle-dollar" data-icon="fa-solid fa-filter-circle-dollar">fa-solid fa-filter-circle-dollaoption>li>
                                        <option value="fa-solid fa-funnel-dollar" data-icon="fa-solid fa-funnel-dollar">fa-solid fa-funnel-dollar</option>
                                        <option value="fa-solid fa-camera-retro" data-icon="fa-solid fa-camera-retro">fa-solid fa-camera-retro</option>
                                        <option value="fa-solid fa-arrow-circle-down" data-icon="fa-solid fa-arrow-circle-down">fa-solid fa-arrow-circle-down</option>
                                        <option value="fa-solid fa-circle-arrow-down" data-icon="fa-solid fa-circle-arrow-down">fa-solid fa-circle-arrow-down</option>
                                        <option value="fa-solid fa-arrow-right-to-file" data-icon="fa-solid fa-arrow-right-to-file">fa-solid fa-arrow-right-to-file</option>
                                        <option value="fa-solid fa-file-import" data-icon="fa-solid fa-file-import">fa-solid fa-file-import</option>
                                        <option value="fa-solid fa-external-link-square" data-icon="fa-solid fa-external-link-square">fa-solid fa-external-link-squaroption>li>
                                        <option value="fa-solid fa-square-arrow-up-right" data-icon="fa-solid fa-square-arrow-up-right">fa-solid fa-square-arrow-option>span></li>
                                        <option value="fa-solid fa-box-open" data-icon="fa-solid fa-box-open">fa-solid fa-box-open</option>
                                        <option value="fa-solid fa-scroll" data-icon="fa-solid fa-scroll">fa-solid fa-scroll</option>
                                        <option value="fa-solid fa-spa" data-icon="fa-solid fa-spa">fa-solid fa-spa</option>
                                        <option value="fa-solid fa-location-pin-lock" data-icon="fa-solid fa-location-pin-lock">fa-solid fa-location-pin-lock</option>
                                        <option value="fa-solid fa-pause" data-icon="fa-solid fa-pause">fa-solid fa-pause</option>
                                        <option value="fa-solid fa-hill-avalanche" data-icon="fa-solid fa-hill-avalanche">fa-solid fa-hill-avalanche</option>
                                        <option value="fa-solid fa-temperature-0" data-icon="fa-solid fa-temperature-0">fa-solid fa-temperature-0</option>
                                        <option value="fa-solid fa-temperature-empty" data-icon="fa-solid fa-temperature-empty">fa-solid fa-temperature-empty</option>
                                        <option value="fa-solid fa-thermometer-0" data-icon="fa-solid fa-thermometer-0">fa-solid fa-thermometer-0</option>
                                        <option value="fa-solid fa-thermometer-empty" data-icon="fa-solid fa-thermometer-empty">fa-solid fa-thermometer-empty</option>
                                        <option value="fa-solid fa-bomb" data-icon="fa-solid fa-bomb">fa-solid fa-bomb</option>
                                        <option value="fa-solid fa-registered" data-icon="fa-solid fa-registered">fa-solid fa-registered</option>
                                        <option value="fa-solid fa-address-card" data-icon="fa-solid fa-address-card">fa-solid fa-address-card</option>
                                        <option value="fa-solid fa-contact-card" data-icon="fa-solid fa-contact-card">fa-solid fa-contact-card</option>
                                        <option value="fa-solid fa-vcard" data-icon="fa-solid fa-vcard">fa-solid fa-vcard</option>
                                        <option value="fa-solid fa-balance-scale-right" data-icon="fa-solid fa-balance-scale-right">fa-solid fa-balance-scale-right</option>
                                        <option value="fa-solid fa-scale-unbalanced-flip" data-icon="fa-solid fa-scale-unbalanced-flip">fa-solid fa-scale-unbalanoption>span></li>
                                        <option value="fa-solid fa-subscript" data-icon="fa-solid fa-subscript">fa-solid fa-subscript</option>
                                        <option value="fa-solid fa-diamond-turn-right" data-icon="fa-solid fa-diamond-turn-right">fa-solid fa-diamond-turn-right</option>
                                        <option value="fa-solid fa-directions" data-icon="fa-solid fa-directions">fa-solid fa-directions</option>
                                        <option value="fa-solid fa-burst" data-icon="fa-solid fa-burst">fa-solid fa-burst</option>
                                        <option value="fa-solid fa-house-laptop" data-icon="fa-solid fa-house-laptop">fa-solid fa-house-laptop</option>
                                        <option value="fa-solid fa-laptop-house" data-icon="fa-solid fa-laptop-house">fa-solid fa-laptop-house</option>
                                        <option value="fa-solid fa-face-tired" data-icon="fa-solid fa-face-tired">fa-solid fa-face-tired</option>
                                        <option value="fa-solid fa-tired" data-icon="fa-solid fa-tired">fa-solid fa-tired</option>
                                        <option value="fa-solid fa-money-bills" data-icon="fa-solid fa-money-bills">fa-solid fa-money-bills</option>
                                        <option value="fa-solid fa-smog" data-icon="fa-solid fa-smog">fa-solid fa-smog</option>
                                        <option value="fa-solid fa-crutch" data-icon="fa-solid fa-crutch">fa-solid fa-crutch</option>
                                        <option value="fa-solid fa-cloud-arrow-up" data-icon="fa-solid fa-cloud-arrow-up">fa-solid fa-cloud-arrow-up</option>
                                        <option value="fa-solid fa-cloud-upload-alt" data-icon="fa-solid fa-cloud-upload-alt">fa-solid fa-cloud-upload-alt</option>
                                        <option value="fa-solid fa-cloud-upload" data-icon="fa-solid fa-cloud-upload">fa-solid fa-cloud-upload</option>
                                        <option value="fa-solid fa-palette" data-icon="fa-solid fa-palette">fa-solid fa-palette</option>
                                        <option value="fa-solid fa-arrows-turn-right" data-icon="fa-solid fa-arrows-turn-right">fa-solid fa-arrows-turn-right</option>
                                        <option value="fa-solid fa-vest" data-icon="fa-solid fa-vest">fa-solid fa-vest</option>
                                        <option value="fa-solid fa-ferry" data-icon="fa-solid fa-ferry">fa-solid fa-ferry</option>
                                        <option value="fa-solid fa-arrows-down-to-people" data-icon="fa-solid fa-arrows-down-to-people">fa-solid fa-arrows-down-toption>span></li>
                                        <option value="fa-solid fa-seedling" data-icon="fa-solid fa-seedling">fa-solid fa-seedling</option>
                                        <option value="fa-solid fa-sprout" data-icon="fa-solid fa-sprout">fa-solid fa-sprout</option>
                                        <option value="fa-solid fa-arrows-alt-h" data-icon="fa-solid fa-arrows-alt-h">fa-solid fa-arrows-alt-h</option>
                                        <option value="fa-solid fa-left-right" data-icon="fa-solid fa-left-right">fa-solid fa-left-right</option>
                                        <option value="fa-solid fa-boxes-packing" data-icon="fa-solid fa-boxes-packing">fa-solid fa-boxes-packing</option>
                                        <option value="fa-solid fa-arrow-circle-left" data-icon="fa-solid fa-arrow-circle-left">fa-solid fa-arrow-circle-left</option>
                                        <option value="fa-solid fa-circle-arrow-left" data-icon="fa-solid fa-circle-arrow-left">fa-solid fa-circle-arrow-left</option>
                                        <option value="fa-solid fa-group-arrows-rotate" data-icon="fa-solid fa-group-arrows-rotate">fa-solid fa-group-arrows-rotate</option>
                                        <option value="fa-solid fa-bowl-food" data-icon="fa-solid fa-bowl-food">fa-solid fa-bowl-food</option>
                                        <option value="fa-solid fa-candy-cane" data-icon="fa-solid fa-candy-cane">fa-solid fa-candy-cane</option>
                                        <option value="fa-solid fa-arrow-down-wide-short" data-icon="fa-solid fa-arrow-down-wide-short">fa-solid fa-arrow-down-wioption>span></li>
                                        <option value="fa-solid fa-sort-amount-asc" data-icon="fa-solid fa-sort-amount-asc">fa-solid fa-sort-amount-asc</option>
                                        <option value="fa-solid fa-sort-amount-down" data-icon="fa-solid fa-sort-amount-down">fa-solid fa-sort-amount-down</option>
                                        <option value="fa-solid fa-cloud-bolt" data-icon="fa-solid fa-cloud-bolt">fa-solid fa-cloud-bolt</option>
                                        <option value="fa-solid fa-thunderstorm" data-icon="fa-solid fa-thunderstorm">fa-solid fa-thunderstorm</option>
                                        <option value="fa-solid fa-remove-format" data-icon="fa-solid fa-remove-format">fa-solid fa-remove-format</option>
                                        <option value="fa-solid fa-text-slash" data-icon="fa-solid fa-text-slash">fa-solid fa-text-slash</option>
                                        <option value="fa-solid fa-face-smile-wink" data-icon="fa-solid fa-face-smile-wink">fa-solid fa-face-smile-wink</option>
                                        <option value="fa-solid fa-smile-wink" data-icon="fa-solid fa-smile-wink">fa-solid fa-smile-wink</option>
                                        <option value="fa-solid fa-file-word" data-icon="fa-solid fa-file-word">fa-solid fa-file-word</option>
                                        <option value="fa-solid fa-file-powerpoint" data-icon="fa-solid fa-file-powerpoint">fa-solid fa-file-powerpoint</option>
                                        <option value="fa-solid fa-arrows-h" data-icon="fa-solid fa-arrows-h">fa-solid fa-arrows-h</option>
                                        <option value="fa-solid fa-arrows-left-right" data-icon="fa-solid fa-arrows-left-right">fa-solid fa-arrows-left-right</option>
                                        <option value="fa-solid fa-house-lock" data-icon="fa-solid fa-house-lock">fa-solid fa-house-lock</option>
                                        <option value="fa-solid fa-cloud-arrow-down" data-icon="fa-solid fa-cloud-arrow-down">fa-solid fa-cloud-arrow-down</option>
                                        <option value="fa-solid fa-cloud-download-alt" data-icon="fa-solid fa-cloud-download-alt">fa-solid fa-cloud-download-alt</option>
                                        <option value="fa-solid fa-cloud-download" data-icon="fa-solid fa-cloud-download">fa-solid fa-cloud-download</option>
                                        <option value="fa-solid fa-children" data-icon="fa-solid fa-children">fa-solid fa-children</option>
                                        <option value="fa-solid fa-blackboard" data-icon="fa-solid fa-blackboard">fa-solid fa-blackboard</option>
                                        <option value="fa-solid fa-chalkboard" data-icon="fa-solid fa-chalkboard">fa-solid fa-chalkboard</option>
                                        <option value="fa-solid fa-user-alt-slash" data-icon="fa-solid fa-user-alt-slash">fa-solid fa-user-alt-slash</option>
                                        <option value="fa-solid fa-user-large-slash" data-icon="fa-solid fa-user-large-slash">fa-solid fa-user-large-slash</option>
                                        <option value="fa-solid fa-envelope-open" data-icon="fa-solid fa-envelope-open">fa-solid fa-envelope-open</option>
                                        <option value="fa-solid fa-handshake-alt-slash" data-icon="fa-solid fa-handshake-alt-slash">fa-solid fa-handshake-alt-slash</option>
                                        <option value="fa-solid fa-handshake-simple-slash" data-icon="fa-solid fa-handshake-simple-slash">fa-solid fa-handshake-simpoption>span></li>
                                        <option value="fa-solid fa-mattress-pillow" data-icon="fa-solid fa-mattress-pillow">fa-solid fa-mattress-pillow</option>
                                        <option value="fa-solid fa-guarani-sign" data-icon="fa-solid fa-guarani-sign">fa-solid fa-guarani-sign</option>
                                        <option value="fa-solid fa-arrows-rotate" data-icon="fa-solid fa-arrows-rotate">fa-solid fa-arrows-rotate</option>
                                        <option value="fa-solid fa-refresh" data-icon="fa-solid fa-refresh">fa-solid fa-refresh</option>
                                        <option value="fa-solid fa-sync" data-icon="fa-solid fa-sync">fa-solid fa-sync</option>
                                        <option value="fa-solid fa-fire-extinguisher" data-icon="fa-solid fa-fire-extinguisher">fa-solid fa-fire-extinguisher</option>
                                        <option value="fa-solid fa-cruzeiro-sign" data-icon="fa-solid fa-cruzeiro-sign">fa-solid fa-cruzeiro-sign</option>
                                        <option value="fa-solid fa-greater-than-equal" data-icon="fa-solid fa-greater-than-equal">fa-solid fa-greater-than-equal</option>
                                        <option value="fa-solid fa-shield-alt" data-icon="fa-solid fa-shield-alt">fa-solid fa-shield-alt</option>
                                        <option value="fa-solid fa-shield-halved" data-icon="fa-solid fa-shield-halved">fa-solid fa-shield-halved</option>
                                        <option value="fa-solid fa-atlas" data-icon="fa-solid fa-atlas">fa-solid fa-atlas</option>
                                        <option value="fa-solid fa-book-atlas" data-icon="fa-solid fa-book-atlas">fa-solid fa-book-atlas</option>
                                        <option value="fa-solid fa-virus" data-icon="fa-solid fa-virus">fa-solid fa-virus</option>
                                        <option value="fa-solid fa-envelope-circle-check" data-icon="fa-solid fa-envelope-circle-check">fa-solid fa-envelope-circoption>span></li>
                                        <option value="fa-solid fa-layer-group" data-icon="fa-solid fa-layer-group">fa-solid fa-layer-group</option>
                                        <option value="fa-solid fa-arrows-to-dot" data-icon="fa-solid fa-arrows-to-dot">fa-solid fa-arrows-to-dot</option>
                                        <option value="fa-solid fa-archway" data-icon="fa-solid fa-archway">fa-solid fa-archway</option>
                                        <option value="fa-solid fa-heart-circle-check" data-icon="fa-solid fa-heart-circle-check">fa-solid fa-heart-circle-check</option>
                                        <option value="fa-solid fa-house-chimney-crack" data-icon="fa-solid fa-house-chimney-crack">fa-solid fa-house-chimney-crack</option>
                                        <option value="fa-solid fa-house-damage" data-icon="fa-solid fa-house-damage">fa-solid fa-house-damage</option>
                                        <option value="fa-solid fa-file-archive" data-icon="fa-solid fa-file-archive">fa-solid fa-file-archive</option>
                                        <option value="fa-solid fa-file-zipper" data-icon="fa-solid fa-file-zipper">fa-solid fa-file-zipper</option>
                                        <option value="fa-solid fa-square" data-icon="fa-solid fa-square">fa-solid fa-square</option>
                                        <option value="fa-solid fa-glass-martini" data-icon="fa-solid fa-glass-martini">fa-solid fa-glass-martini</option>
                                        <option value="fa-solid fa-martini-glass-empty" data-icon="fa-solid fa-martini-glass-empty">fa-solid fa-martini-glass-empty</option>
                                        <option value="fa-solid fa-couch" data-icon="fa-solid fa-couch">fa-solid fa-couch</option>
                                        <option value="fa-solid fa-cedi-sign" data-icon="fa-solid fa-cedi-sign">fa-solid fa-cedi-sign</option>
                                        <option value="fa-solid fa-italic" data-icon="fa-solid fa-italic">fa-solid fa-italic</option>
                                        <option value="fa-solid fa-church" data-icon="fa-solid fa-church">fa-solid fa-church</option>
                                        <option value="fa-solid fa-comments-dollar" data-icon="fa-solid fa-comments-dollar">fa-solid fa-comments-dollar</option>
                                        <option value="fa-solid fa-democrat" data-icon="fa-solid fa-democrat">fa-solid fa-democrat</option>
                                        <option value="fa-solid fa-z" data-icon="fa-solid fa-z">fa-solid fa-z</option>
                                        <option value="fa-solid fa-person-skiing" data-icon="fa-solid fa-person-skiing">fa-solid fa-person-skiing</option>
                                        <option value="fa-solid fa-skiing" data-icon="fa-solid fa-skiing">fa-solid fa-skiing</option>
                                        <option value="fa-solid fa-road-lock" data-icon="fa-solid fa-road-lock">fa-solid fa-road-lock</option>
                                        <option value="fa-solid fa-a" data-icon="fa-solid fa-a">fa-solid fa-a</option>
                                        <option value="fa-solid fa-temperature-arrow-down" data-icon="fa-solid fa-temperature-arrow-down">fa-solid fa-temperature-aroption>span></li>
                                        <option value="fa-solid fa-temperature-down" data-icon="fa-solid fa-temperature-down">fa-solid fa-temperature-down</option>
                                        <option value="fa-solid fa-feather-alt" data-icon="fa-solid fa-feather-alt">fa-solid fa-feather-alt</option>
                                        <option value="fa-solid fa-feather-pointed" data-icon="fa-solid fa-feather-pointed">fa-solid fa-feather-pointed</option>
                                        <option value="fa-solid fa-p" data-icon="fa-solid fa-p">fa-solid fa-p</option>
                                        <option value="fa-solid fa-snowflake" data-icon="fa-solid fa-snowflake">fa-solid fa-snowflake</option>
                                        <option value="fa-solid fa-newspaper" data-icon="fa-solid fa-newspaper">fa-solid fa-newspaper</option>
                                        <option value="fa-solid fa-ad" data-icon="fa-solid fa-ad">fa-solid fa-ad</option>
                                        <option value="fa-solid fa-rectangle-ad" data-icon="fa-solid fa-rectangle-ad">fa-solid fa-rectangle-ad</option>
                                        <option value="fa-solid fa-arrow-circle-right" data-icon="fa-solid fa-arrow-circle-right">fa-solid fa-arrow-circle-right</option>
                                        <option value="fa-solid fa-circle-arrow-right" data-icon="fa-solid fa-circle-arrow-right">fa-solid fa-circle-arrow-right</option>
                                        <option value="fa-solid fa-filter-circle-xmark" data-icon="fa-solid fa-filter-circle-xmark">fa-solid fa-filter-circle-xmark</option>
                                        <option value="fa-solid fa-locust" data-icon="fa-solid fa-locust">fa-solid fa-locust</option>
                                        <option value="fa-solid fa-sort" data-icon="fa-solid fa-sort">fa-solid fa-sort</option>
                                        <option value="fa-solid fa-unsorted" data-icon="fa-solid fa-unsorted">fa-solid fa-unsorted</option>
                                        <option value="fa-solid fa-list-1-2" data-icon="fa-solid fa-list-1-2">fa-solid fa-list-1-2</option>
                                        <option value="fa-solid fa-list-numeric" data-icon="fa-solid fa-list-numeric">fa-solid fa-list-numeric</option>
                                        <option value="fa-solid fa-list-ol" data-icon="fa-solid fa-list-ol">fa-solid fa-list-ol</option>
                                        <option value="fa-solid fa-person-dress-burst" data-icon="fa-solid fa-person-dress-burst">fa-solid fa-person-dress-burst</option>
                                        <option value="fa-solid fa-money-check-alt" data-icon="fa-solid fa-money-check-alt">fa-solid fa-money-check-alt</option>
                                        <option value="fa-solid fa-money-check-dollar" data-icon="fa-solid fa-money-check-dollar">fa-solid fa-money-check-dollar</option>
                                        <option value="fa-solid fa-vector-square" data-icon="fa-solid fa-vector-square">fa-solid fa-vector-square</option>
                                        <option value="fa-solid fa-bread-slice" data-icon="fa-solid fa-bread-slice">fa-solid fa-bread-slice</option>
                                        <option value="fa-solid fa-language" data-icon="fa-solid fa-language">fa-solid fa-language</option>
                                        <option value="fa-solid fa-face-kiss-wink-heart" data-icon="fa-solid fa-face-kiss-wink-heart">fa-solid fa-face-kiss-wink-hearoption>li>
                                        <option value="fa-solid fa-kiss-wink-heart" data-icon="fa-solid fa-kiss-wink-heart">fa-solid fa-kiss-wink-heart</option>
                                        <option value="fa-solid fa-filter" data-icon="fa-solid fa-filter">fa-solid fa-filter</option>
                                        <option value="fa-solid fa-question" data-icon="fa-solid fa-question">fa-solid fa-question</option>
                                        <option value="fa-solid fa-file-signature" data-icon="fa-solid fa-file-signature">fa-solid fa-file-signature</option>
                                        <option value="fa-solid fa-arrows-alt" data-icon="fa-solid fa-arrows-alt">fa-solid fa-arrows-alt</option>
                                        <option value="fa-solid fa-up-down-left-right" data-icon="fa-solid fa-up-down-left-right">fa-solid fa-up-down-left-right</option>
                                        <option value="fa-solid fa-house-chimney-user" data-icon="fa-solid fa-house-chimney-user">fa-solid fa-house-chimney-user</option>
                                        <option value="fa-solid fa-hand-holding-heart" data-icon="fa-solid fa-hand-holding-heart">fa-solid fa-hand-holding-heart</option>
                                        <option value="fa-solid fa-puzzle-piece" data-icon="fa-solid fa-puzzle-piece">fa-solid fa-puzzle-piece</option>
                                        <option value="fa-solid fa-money-check" data-icon="fa-solid fa-money-check">fa-solid fa-money-check</option>
                                        <option value="fa-solid fa-star-half-alt" data-icon="fa-solid fa-star-half-alt">fa-solid fa-star-half-alt</option>
                                        <option value="fa-solid fa-star-half-stroke" data-icon="fa-solid fa-star-half-stroke">fa-solid fa-star-half-stroke</option>
                                        <option value="fa-solid fa-code" data-icon="fa-solid fa-code">fa-solid fa-code</option>
                                        <option value="fa-solid fa-glass-whiskey" data-icon="fa-solid fa-glass-whiskey">fa-solid fa-glass-whiskey</option>
                                        <option value="fa-solid fa-whiskey-glass" data-icon="fa-solid fa-whiskey-glass">fa-solid fa-whiskey-glass</option>
                                        <option value="fa-solid fa-building-circle-exclamation" data-icon="fa-solid fa-building-circle-exclamation"option>fa-building-circle-exclamation</span></li>
                                        <option value="fa-solid fa-magnifying-glass-chart" data-icon="fa-solid fa-magnifying-glass-chart">fa-solid fa-magnifying-glaoption>span></li>
                                        <option value="fa-solid fa-arrow-up-right-from-square" data-icon="fa-solid fa-arrow-up-right-from-square"option>fa-arrow-up-right-from-square</span></li>
                                        <option value="fa-solid fa-external-link" data-icon="fa-solid fa-external-link">fa-solid fa-external-link</option>
                                        <option value="fa-solid fa-cubes-stacked" data-icon="fa-solid fa-cubes-stacked">fa-solid fa-cubes-stacked</option>
                                        <option value="fa-solid fa-krw" data-icon="fa-solid fa-krw">fa-solid fa-krw</option>
                                        <option value="fa-solid fa-won-sign" data-icon="fa-solid fa-won-sign">fa-solid fa-won-sign</option>
                                        <option value="fa-solid fa-won" data-icon="fa-solid fa-won">fa-solid fa-won</option>
                                        <option value="fa-solid fa-virus-covid" data-icon="fa-solid fa-virus-covid">fa-solid fa-virus-covid</option>
                                        <option value="fa-solid fa-austral-sign" data-icon="fa-solid fa-austral-sign">fa-solid fa-austral-sign</option>
                                        <option value="fa-solid fa-f" data-icon="fa-solid fa-f">fa-solid fa-f</option>
                                        <option value="fa-solid fa-leaf" data-icon="fa-solid fa-leaf">fa-solid fa-leaf</option>
                                        <option value="fa-solid fa-road" data-icon="fa-solid fa-road">fa-solid fa-road</option>
                                        <option value="fa-solid fa-cab" data-icon="fa-solid fa-cab">fa-solid fa-cab</option>
                                        <option value="fa-solid fa-taxi" data-icon="fa-solid fa-taxi">fa-solid fa-taxi</option>
                                        <option value="fa-solid fa-person-circle-plus" data-icon="fa-solid fa-person-circle-plus">fa-solid fa-person-circle-plus</option>
                                        <option value="fa-solid fa-chart-pie" data-icon="fa-solid fa-chart-pie">fa-solid fa-chart-pie</option>
                                        <option value="fa-solid fa-pie-chart" data-icon="fa-solid fa-pie-chart">fa-solid fa-pie-chart</option>
                                        <option value="fa-solid fa-bolt-lightning" data-icon="fa-solid fa-bolt-lightning">fa-solid fa-bolt-lightning</option>
                                        <option value="fa-solid fa-sack-xmark" data-icon="fa-solid fa-sack-xmark">fa-solid fa-sack-xmark</option>
                                        <option value="fa-solid fa-file-excel" data-icon="fa-solid fa-file-excel">fa-solid fa-file-excel</option>
                                        <option value="fa-solid fa-file-contract" data-icon="fa-solid fa-file-contract">fa-solid fa-file-contract</option>
                                        <option value="fa-solid fa-fish-fins" data-icon="fa-solid fa-fish-fins">fa-solid fa-fish-fins</option>
                                        <option value="fa-solid fa-building-flag" data-icon="fa-solid fa-building-flag">fa-solid fa-building-flag</option>
                                        <option value="fa-solid fa-face-grin-beam" data-icon="fa-solid fa-face-grin-beam">fa-solid fa-face-grin-beam</option>
                                        <option value="fa-solid fa-grin-beam" data-icon="fa-solid fa-grin-beam">fa-solid fa-grin-beam</option>
                                        <option value="fa-solid fa-object-ungroup" data-icon="fa-solid fa-object-ungroup">fa-solid fa-object-ungroup</option>
                                        <option value="fa-solid fa-poop" data-icon="fa-solid fa-poop">fa-solid fa-poop</option>
                                        <option value="fa-solid fa-location-pin" data-icon="fa-solid fa-location-pin">fa-solid fa-location-pin</option>
                                        <option value="fa-solid fa-map-marker" data-icon="fa-solid fa-map-marker">fa-solid fa-map-marker</option>
                                        <option value="fa-solid fa-kaaba" data-icon="fa-solid fa-kaaba">fa-solid fa-kaaba</option>
                                        <option value="fa-solid fa-toilet-paper" data-icon="fa-solid fa-toilet-paper">fa-solid fa-toilet-paper</option>
                                        <option value="fa-solid fa-hard-hat" data-icon="fa-solid fa-hard-hat">fa-solid fa-hard-hat</option>
                                        <option value="fa-solid fa-hat-hard" data-icon="fa-solid fa-hat-hard">fa-solid fa-hat-hard</option>
                                        <option value="fa-solid fa-helmet-safety" data-icon="fa-solid fa-helmet-safety">fa-solid fa-helmet-safety</option>
                                        <option value="fa-solid fa-eject" data-icon="fa-solid fa-eject">fa-solid fa-eject</option>
                                        <option value="fa-solid fa-arrow-alt-circle-right" data-icon="fa-solid fa-arrow-alt-circle-right">fa-solid fa-arrow-alt-circoption>span></li>
                                        <option value="fa-solid fa-circle-right" data-icon="fa-solid fa-circle-right">fa-solid fa-circle-right</option>
                                        <option value="fa-solid fa-plane-circle-check" data-icon="fa-solid fa-plane-circle-check">fa-solid fa-plane-circle-check</option>
                                        <option value="fa-solid fa-face-rolling-eyes" data-icon="fa-solid fa-face-rolling-eyes">fa-solid fa-face-rolling-eyes</option>
                                        <option value="fa-solid fa-meh-rolling-eyes" data-icon="fa-solid fa-meh-rolling-eyes">fa-solid fa-meh-rolling-eyes</option>
                                        <option value="fa-solid fa-object-group" data-icon="fa-solid fa-object-group">fa-solid fa-object-group</option>
                                        <option value="fa-solid fa-chart-line" data-icon="fa-solid fa-chart-line">fa-solid fa-chart-line</option>
                                        <option value="fa-solid fa-line-chart" data-icon="fa-solid fa-line-chart">fa-solid fa-line-chart</option>
                                        <option value="fa-solid fa-mask-ventilator" data-icon="fa-solid fa-mask-ventilator">fa-solid fa-mask-ventilator</option>
                                        <option value="fa-solid fa-arrow-right" data-icon="fa-solid fa-arrow-right">fa-solid fa-arrow-right</option>
                                        <option value="fa-solid fa-map-signs" data-icon="fa-solid fa-map-signs">fa-solid fa-map-signs</option>
                                        <option value="fa-solid fa-signs-post" data-icon="fa-solid fa-signs-post">fa-solid fa-signs-post</option>
                                        <option value="fa-solid fa-cash-register" data-icon="fa-solid fa-cash-register">fa-solid fa-cash-register</option>
                                        <option value="fa-solid fa-person-circle-question" data-icon="fa-solid fa-person-circle-question">fa-solid fa-person-circle-option>span></li>
                                        <option value="fa-solid fa-h" data-icon="fa-solid fa-h">fa-solid fa-h</option>
                                        <option value="fa-solid fa-tarp" data-icon="fa-solid fa-tarp">fa-solid fa-tarp</option>
                                        <option value="fa-solid fa-screwdriver-wrench" data-icon="fa-solid fa-screwdriver-wrench">fa-solid fa-screwdriver-wrench</option>
                                        <option value="fa-solid fa-tools" data-icon="fa-solid fa-tools">fa-solid fa-tools</option>
                                        <option value="fa-solid fa-arrows-to-eye" data-icon="fa-solid fa-arrows-to-eye">fa-solid fa-arrows-to-eye</option>
                                        <option value="fa-solid fa-plug-circle-bolt" data-icon="fa-solid fa-plug-circle-bolt">fa-solid fa-plug-circle-bolt</option>
                                        <option value="fa-solid fa-heart" data-icon="fa-solid fa-heart">fa-solid fa-heart</option>
                                        <option value="fa-solid fa-mars-and-venus" data-icon="fa-solid fa-mars-and-venus">fa-solid fa-mars-and-venus</option>
                                        <option value="fa-solid fa-home-user" data-icon="fa-solid fa-home-user">fa-solid fa-home-user</option>
                                        <option value="fa-solid fa-house-user" data-icon="fa-solid fa-house-user">fa-solid fa-house-user</option>
                                        <option value="fa-solid fa-dumpster-fire" data-icon="fa-solid fa-dumpster-fire">fa-solid fa-dumpster-fire</option>
                                        <option value="fa-solid fa-house-crack" data-icon="fa-solid fa-house-crack">fa-solid fa-house-crack</option>
                                        <option value="fa-solid fa-cocktail" data-icon="fa-solid fa-cocktail">fa-solid fa-cocktail</option>
                                        <option value="fa-solid fa-martini-glass-citrus" data-icon="fa-solid fa-martini-glass-citrus">fa-solid fa-martini-glass-citruoption>li>
                                        <option value="fa-solid fa-face-surprise" data-icon="fa-solid fa-face-surprise">fa-solid fa-face-surprise</option>
                                        <option value="fa-solid fa-surprise" data-icon="fa-solid fa-surprise">fa-solid fa-surprise</option>
                                        <option value="fa-solid fa-bottle-water" data-icon="fa-solid fa-bottle-water">fa-solid fa-bottle-water</option>
                                        <option value="fa-solid fa-circle-pause" data-icon="fa-solid fa-circle-pause">fa-solid fa-circle-pause</option>
                                        <option value="fa-solid fa-pause-circle" data-icon="fa-solid fa-pause-circle">fa-solid fa-pause-circle</option>
                                        <option value="fa-solid fa-toilet-paper-slash" data-icon="fa-solid fa-toilet-paper-slash">fa-solid fa-toilet-paper-slash</option>
                                        <option value="fa-solid fa-apple-alt" data-icon="fa-solid fa-apple-alt">fa-solid fa-apple-alt</option>
                                        <option value="fa-solid fa-apple-whole" data-icon="fa-solid fa-apple-whole">fa-solid fa-apple-whole</option>
                                        <option value="fa-solid fa-kitchen-set" data-icon="fa-solid fa-kitchen-set">fa-solid fa-kitchen-set</option>
                                        <option value="fa-solid fa-r" data-icon="fa-solid fa-r">fa-solid fa-r</option>
                                        <option value="fa-solid fa-temperature-1" data-icon="fa-solid fa-temperature-1">fa-solid fa-temperature-1</option>
                                        <option value="fa-solid fa-temperature-quarter" data-icon="fa-solid fa-temperature-quarter">fa-solid fa-temperature-quarter</option>
                                        <option value="fa-solid fa-thermometer-1" data-icon="fa-solid fa-thermometer-1">fa-solid fa-thermometer-1</option>
                                        <option value="fa-solid fa-thermometer-quarter" data-icon="fa-solid fa-thermometer-quarter">fa-solid fa-thermometer-quarter</option>
                                        <option value="fa-solid fa-cube" data-icon="fa-solid fa-cube">fa-solid fa-cube</option>
                                        <option value="fa-solid fa-bitcoin-sign" data-icon="fa-solid fa-bitcoin-sign">fa-solid fa-bitcoin-sign</option>
                                        <option value="fa-solid fa-shield-dog" data-icon="fa-solid fa-shield-dog">fa-solid fa-shield-dog</option>
                                        <option value="fa-solid fa-solar-panel" data-icon="fa-solid fa-solar-panel">fa-solid fa-solar-panel</option>
                                        <option value="fa-solid fa-lock-open" data-icon="fa-solid fa-lock-open">fa-solid fa-lock-open</option>
                                        <option value="fa-solid fa-elevator" data-icon="fa-solid fa-elevator">fa-solid fa-elevator</option>
                                        <option value="fa-solid fa-money-bill-transfer" data-icon="fa-solid fa-money-bill-transfer">fa-solid fa-money-bill-transfer</option>
                                        <option value="fa-solid fa-money-bill-trend-up" data-icon="fa-solid fa-money-bill-trend-up">fa-solid fa-money-bill-trend-up</option>
                                        <option value="fa-solid fa-house-flood-water-circle-arrow-right" data-icon="fa-solid fa-house-flood-water-circle-arrow-right"option>fa-house-flood-water-circle-arrow-right</span></li>
                                        <option value="fa-solid fa-poll-h" data-icon="fa-solid fa-poll-h">fa-solid fa-poll-h</option>
                                        <option value="fa-solid fa-square-poll-horizontal" data-icon="fa-solid fa-square-poll-horizontal">fa-solid fa-square-poll-hooption>span></li>
                                        <option value="fa-solid fa-circle" data-icon="fa-solid fa-circle">fa-solid fa-circle</option>
                                        <option value="fa-solid fa-backward-fast" data-icon="fa-solid fa-backward-fast">fa-solid fa-backward-fast</option>
                                        <option value="fa-solid fa-fast-backward" data-icon="fa-solid fa-fast-backward">fa-solid fa-fast-backward</option>
                                        <option value="fa-solid fa-recycle" data-icon="fa-solid fa-recycle">fa-solid fa-recycle</option>
                                        <option value="fa-solid fa-user-astronaut" data-icon="fa-solid fa-user-astronaut">fa-solid fa-user-astronaut</option>
                                        <option value="fa-solid fa-plane-slash" data-icon="fa-solid fa-plane-slash">fa-solid fa-plane-slash</option>
                                        <option value="fa-solid fa-trademark" data-icon="fa-solid fa-trademark">fa-solid fa-trademark</option>
                                        <option value="fa-solid fa-basketball-ball" data-icon="fa-solid fa-basketball-ball">fa-solid fa-basketball-ball</option>
                                        <option value="fa-solid fa-basketball" data-icon="fa-solid fa-basketball">fa-solid fa-basketball</option>
                                        <option value="fa-solid fa-satellite-dish" data-icon="fa-solid fa-satellite-dish">fa-solid fa-satellite-dish</option>
                                        <option value="fa-solid fa-arrow-alt-circle-up" data-icon="fa-solid fa-arrow-alt-circle-up">fa-solid fa-arrow-alt-circle-up</option>
                                        <option value="fa-solid fa-circle-up" data-icon="fa-solid fa-circle-up">fa-solid fa-circle-up</option>
                                        <option value="fa-solid fa-mobile-alt" data-icon="fa-solid fa-mobile-alt">fa-solid fa-mobile-alt</option>
                                        <option value="fa-solid fa-mobile-screen-button" data-icon="fa-solid fa-mobile-screen-button">fa-solid fa-mobile-screen-buttooption>li>
                                        <option value="fa-solid fa-volume-high" data-icon="fa-solid fa-volume-high">fa-solid fa-volume-high</option>
                                        <option value="fa-solid fa-volume-up" data-icon="fa-solid fa-volume-up">fa-solid fa-volume-up</option>
                                        <option value="fa-solid fa-users-rays" data-icon="fa-solid fa-users-rays">fa-solid fa-users-rays</option>
                                        <option value="fa-solid fa-wallet" data-icon="fa-solid fa-wallet">fa-solid fa-wallet</option>
                                        <option value="fa-solid fa-clipboard-check" data-icon="fa-solid fa-clipboard-check">fa-solid fa-clipboard-check</option>
                                        <option value="fa-solid fa-file-audio" data-icon="fa-solid fa-file-audio">fa-solid fa-file-audio</option>
                                        <option value="fa-solid fa-burger" data-icon="fa-solid fa-burger">fa-solid fa-burger</option>
                                        <option value="fa-solid fa-hamburger" data-icon="fa-solid fa-hamburger">fa-solid fa-hamburger</option>
                                        <option value="fa-solid fa-wrench" data-icon="fa-solid fa-wrench">fa-solid fa-wrench</option>
                                        <option value="fa-solid fa-bugs" data-icon="fa-solid fa-bugs">fa-solid fa-bugs</option>
                                        <option value="fa-solid fa-rupee-sign" data-icon="fa-solid fa-rupee-sign">fa-solid fa-rupee-sign</option>
                                        <option value="fa-solid fa-rupee" data-icon="fa-solid fa-rupee">fa-solid fa-rupee</option>
                                        <option value="fa-solid fa-file-image" data-icon="fa-solid fa-file-image">fa-solid fa-file-image</option>
                                        <option value="fa-solid fa-circle-question" data-icon="fa-solid fa-circle-question">fa-solid fa-circle-question</option>
                                        <option value="fa-solid fa-question-circle" data-icon="fa-solid fa-question-circle">fa-solid fa-question-circle</option>
                                        <option value="fa-solid fa-plane-departure" data-icon="fa-solid fa-plane-departure">fa-solid fa-plane-departure</option>
                                        <option value="fa-solid fa-handshake-slash" data-icon="fa-solid fa-handshake-slash">fa-solid fa-handshake-slash</option>
                                        <option value="fa-solid fa-book-bookmark" data-icon="fa-solid fa-book-bookmark">fa-solid fa-book-bookmark</option>
                                        <option value="fa-solid fa-code-branch" data-icon="fa-solid fa-code-branch">fa-solid fa-code-branch</option>
                                        <option value="fa-solid fa-hat-cowboy" data-icon="fa-solid fa-hat-cowboy">fa-solid fa-hat-cowboy</option>
                                        <option value="fa-solid fa-bridge" data-icon="fa-solid fa-bridge">fa-solid fa-bridge</option>
                                        <option value="fa-solid fa-phone-alt" data-icon="fa-solid fa-phone-alt">fa-solid fa-phone-alt</option>
                                        <option value="fa-solid fa-phone-flip" data-icon="fa-solid fa-phone-flip">fa-solid fa-phone-flip</option>
                                        <option value="fa-solid fa-truck-front" data-icon="fa-solid fa-truck-front">fa-solid fa-truck-front</option>
                                        <option value="fa-solid fa-cat" data-icon="fa-solid fa-cat">fa-solid fa-cat</option>
                                        <option value="fa-solid fa-anchor-circle-exclamation" data-icon="fa-solid fa-anchor-circle-exclamation"option>fa-anchor-circle-exclamation</span></li>
                                        <option value="fa-solid fa-truck-field" data-icon="fa-solid fa-truck-field">fa-solid fa-truck-field</option>
                                        <option value="fa-solid fa-route" data-icon="fa-solid fa-route">fa-solid fa-route</option>
                                        <option value="fa-solid fa-clipboard-question" data-icon="fa-solid fa-clipboard-question">fa-solid fa-clipboard-question</option>
                                        <option value="fa-solid fa-panorama" data-icon="fa-solid fa-panorama">fa-solid fa-panorama</option>
                                        <option value="fa-solid fa-comment-medical" data-icon="fa-solid fa-comment-medical">fa-solid fa-comment-medical</option>
                                        <option value="fa-solid fa-teeth-open" data-icon="fa-solid fa-teeth-open">fa-solid fa-teeth-open</option>
                                        <option value="fa-solid fa-file-circle-minus" data-icon="fa-solid fa-file-circle-minus">fa-solid fa-file-circle-minus</option>
                                        <option value="fa-solid fa-tags" data-icon="fa-solid fa-tags">fa-solid fa-tags</option>
                                        <option value="fa-solid fa-wine-glass" data-icon="fa-solid fa-wine-glass">fa-solid fa-wine-glass</option>
                                        <option value="fa-solid fa-fast-forward" data-icon="fa-solid fa-fast-forward">fa-solid fa-fast-forward</option>
                                        <option value="fa-solid fa-forward-fast" data-icon="fa-solid fa-forward-fast">fa-solid fa-forward-fast</option>
                                        <option value="fa-solid fa-face-meh-blank" data-icon="fa-solid fa-face-meh-blank">fa-solid fa-face-meh-blank</option>
                                        <option value="fa-solid fa-meh-blank" data-icon="fa-solid fa-meh-blank">fa-solid fa-meh-blank</option>
                                        <option value="fa-solid fa-parking" data-icon="fa-solid fa-parking">fa-solid fa-parking</option>
                                        <option value="fa-solid fa-square-parking" data-icon="fa-solid fa-square-parking">fa-solid fa-square-parking</option>
                                        <option value="fa-solid fa-house-signal" data-icon="fa-solid fa-house-signal">fa-solid fa-house-signal</option>
                                        <option value="fa-solid fa-bars-progress" data-icon="fa-solid fa-bars-progress">fa-solid fa-bars-progress</option>
                                        <option value="fa-solid fa-tasks-alt" data-icon="fa-solid fa-tasks-alt">fa-solid fa-tasks-alt</option>
                                        <option value="fa-solid fa-faucet-drip" data-icon="fa-solid fa-faucet-drip">fa-solid fa-faucet-drip</option>
                                        <option value="fa-solid fa-cart-flatbed" data-icon="fa-solid fa-cart-flatbed">fa-solid fa-cart-flatbed</option>
                                        <option value="fa-solid fa-dolly-flatbed" data-icon="fa-solid fa-dolly-flatbed">fa-solid fa-dolly-flatbed</option>
                                        <option value="fa-solid fa-ban-smoking" data-icon="fa-solid fa-ban-smoking">fa-solid fa-ban-smoking</option>
                                        <option value="fa-solid fa-smoking-ban" data-icon="fa-solid fa-smoking-ban">fa-solid fa-smoking-ban</option>
                                        <option value="fa-solid fa-terminal" data-icon="fa-solid fa-terminal">fa-solid fa-terminal</option>
                                        <option value="fa-solid fa-mobile-button" data-icon="fa-solid fa-mobile-button">fa-solid fa-mobile-button</option>
                                        <option value="fa-solid fa-house-medical-flag" data-icon="fa-solid fa-house-medical-flag">fa-solid fa-house-medical-flag</option>
                                        <option value="fa-solid fa-basket-shopping" data-icon="fa-solid fa-basket-shopping">fa-solid fa-basket-shopping</option>
                                        <option value="fa-solid fa-shopping-basket" data-icon="fa-solid fa-shopping-basket">fa-solid fa-shopping-basket</option>
                                        <option value="fa-solid fa-tape" data-icon="fa-solid fa-tape">fa-solid fa-tape</option>
                                        <option value="fa-solid fa-bus-alt" data-icon="fa-solid fa-bus-alt">fa-solid fa-bus-alt</option>
                                        <option value="fa-solid fa-bus-simple" data-icon="fa-solid fa-bus-simple">fa-solid fa-bus-simple</option>
                                        <option value="fa-solid fa-eye" data-icon="fa-solid fa-eye">fa-solid fa-eye</option>
                                        <option value="fa-solid fa-face-sad-cry" data-icon="fa-solid fa-face-sad-cry">fa-solid fa-face-sad-cry</option>
                                        <option value="fa-solid fa-sad-cry" data-icon="fa-solid fa-sad-cry">fa-solid fa-sad-cry</option>
                                        <option value="fa-solid fa-audio-description" data-icon="fa-solid fa-audio-description">fa-solid fa-audio-description</option>
                                        <option value="fa-solid fa-person-military-to-person" data-icon="fa-solid fa-person-military-to-person"option>fa-person-military-to-person</span></li>
                                        <option value="fa-solid fa-file-shield" data-icon="fa-solid fa-file-shield">fa-solid fa-file-shield</option>
                                        <option value="fa-solid fa-user-slash" data-icon="fa-solid fa-user-slash">fa-solid fa-user-slash</option>
                                        <option value="fa-solid fa-pen" data-icon="fa-solid fa-pen">fa-solid fa-pen</option>
                                        <option value="fa-solid fa-tower-observation" data-icon="fa-solid fa-tower-observation">fa-solid fa-tower-observation</option>
                                        <option value="fa-solid fa-file-code" data-icon="fa-solid fa-file-code">fa-solid fa-file-code</option>
                                        <option value="fa-solid fa-signal-5" data-icon="fa-solid fa-signal-5">fa-solid fa-signal-5</option>
                                        <option value="fa-solid fa-signal-perfect" data-icon="fa-solid fa-signal-perfect">fa-solid fa-signal-perfect</option>
                                        <option value="fa-solid fa-signal" data-icon="fa-solid fa-signal">fa-solid fa-signal</option>
                                        <option value="fa-solid fa-bus" data-icon="fa-solid fa-bus">fa-solid fa-bus</option>
                                        <option value="fa-solid fa-heart-circle-xmark" data-icon="fa-solid fa-heart-circle-xmark">fa-solid fa-heart-circle-xmark</option>
                                        <option value="fa-solid fa-home-lg" data-icon="fa-solid fa-home-lg">fa-solid fa-home-lg</option>
                                        <option value="fa-solid fa-house-chimney" data-icon="fa-solid fa-house-chimney">fa-solid fa-house-chimney</option>
                                        <option value="fa-solid fa-window-maximize" data-icon="fa-solid fa-window-maximize">fa-solid fa-window-maximize</option>
                                        <option value="fa-solid fa-face-frown" data-icon="fa-solid fa-face-frown">fa-solid fa-face-frown</option>
                                        <option value="fa-solid fa-frown" data-icon="fa-solid fa-frown">fa-solid fa-frown</option>
                                        <option value="fa-solid fa-prescription" data-icon="fa-solid fa-prescription">fa-solid fa-prescription</option>
                                        <option value="fa-solid fa-shop" data-icon="fa-solid fa-shop">fa-solid fa-shop</option>
                                        <option value="fa-solid fa-store-alt" data-icon="fa-solid fa-store-alt">fa-solid fa-store-alt</option>
                                        <option value="fa-solid fa-floppy-disk" data-icon="fa-solid fa-floppy-disk">fa-solid fa-floppy-disk</option>
                                        <option value="fa-solid fa-save" data-icon="fa-solid fa-save">fa-solid fa-save</option>
                                        <option value="fa-solid fa-vihara" data-icon="fa-solid fa-vihara">fa-solid fa-vihara</option>
                                        <option value="fa-solid fa-balance-scale-left" data-icon="fa-solid fa-balance-scale-left">fa-solid fa-balance-scale-left</option>
                                        <option value="fa-solid fa-scale-unbalanced" data-icon="fa-solid fa-scale-unbalanced">fa-solid fa-scale-unbalanced</option>
                                        <option value="fa-solid fa-sort-asc" data-icon="fa-solid fa-sort-asc">fa-solid fa-sort-asc</option>
                                        <option value="fa-solid fa-sort-up" data-icon="fa-solid fa-sort-up">fa-solid fa-sort-up</option>
                                        <option value="fa-solid fa-comment-dots" data-icon="fa-solid fa-comment-dots">fa-solid fa-comment-dots</option>
                                        <option value="fa-solid fa-commenting" data-icon="fa-solid fa-commenting">fa-solid fa-commenting</option>
                                        <option value="fa-solid fa-plant-wilt" data-icon="fa-solid fa-plant-wilt">fa-solid fa-plant-wilt</option>
                                        <option value="fa-solid fa-diamond" data-icon="fa-solid fa-diamond">fa-solid fa-diamond</option>
                                        <option value="fa-solid fa-face-grin-squint" data-icon="fa-solid fa-face-grin-squint">fa-solid fa-face-grin-squint</option>
                                        <option value="fa-solid fa-grin-squint" data-icon="fa-solid fa-grin-squint">fa-solid fa-grin-squint</option>
                                        <option value="fa-solid fa-hand-holding-dollar" data-icon="fa-solid fa-hand-holding-dollar">fa-solid fa-hand-holding-dollar</option>
                                        <option value="fa-solid fa-hand-holding-usd" data-icon="fa-solid fa-hand-holding-usd">fa-solid fa-hand-holding-usd</option>
                                        <option value="fa-solid fa-bacterium" data-icon="fa-solid fa-bacterium">fa-solid fa-bacterium</option>
                                        <option value="fa-solid fa-hand-pointer" data-icon="fa-solid fa-hand-pointer">fa-solid fa-hand-pointer</option>
                                        <option value="fa-solid fa-drum-steelpan" data-icon="fa-solid fa-drum-steelpan">fa-solid fa-drum-steelpan</option>
                                        <option value="fa-solid fa-hand-scissors" data-icon="fa-solid fa-hand-scissors">fa-solid fa-hand-scissors</option>
                                        <option value="fa-solid fa-hands-praying" data-icon="fa-solid fa-hands-praying">fa-solid fa-hands-praying</option>
                                        <option value="fa-solid fa-praying-hands" data-icon="fa-solid fa-praying-hands">fa-solid fa-praying-hands</option>
                                        <option value="fa-solid fa-arrow-right-rotate" data-icon="fa-solid fa-arrow-right-rotate">fa-solid fa-arrow-right-rotate</option>
                                        <option value="fa-solid fa-arrow-rotate-forward" data-icon="fa-solid fa-arrow-rotate-forward">fa-solid fa-arrow-rotate-forwaroption>li>
                                        <option value="fa-solid fa-arrow-rotate-right" data-icon="fa-solid fa-arrow-rotate-right">fa-solid fa-arrow-rotate-right</option>
                                        <option value="fa-solid fa-redo" data-icon="fa-solid fa-redo">fa-solid fa-redo</option>
                                        <option value="fa-solid fa-biohazard" data-icon="fa-solid fa-biohazard">fa-solid fa-biohazard</option>
                                        <option value="fa-solid fa-location-crosshairs" data-icon="fa-solid fa-location-crosshairs">fa-solid fa-location-crosshairs</option>
                                        <option value="fa-solid fa-location" data-icon="fa-solid fa-location">fa-solid fa-location</option>
                                        <option value="fa-solid fa-mars-double" data-icon="fa-solid fa-mars-double">fa-solid fa-mars-double</option>
                                        <option value="fa-solid fa-child-dress" data-icon="fa-solid fa-child-dress">fa-solid fa-child-dress</option>
                                        <option value="fa-solid fa-users-between-lines" data-icon="fa-solid fa-users-between-lines">fa-solid fa-users-between-lines</option>
                                        <option value="fa-solid fa-lungs-virus" data-icon="fa-solid fa-lungs-virus">fa-solid fa-lungs-virus</option>
                                        <option value="fa-solid fa-face-grin-tears" data-icon="fa-solid fa-face-grin-tears">fa-solid fa-face-grin-tears</option>
                                        <option value="fa-solid fa-grin-tears" data-icon="fa-solid fa-grin-tears">fa-solid fa-grin-tears</option>
                                        <option value="fa-solid fa-phone" data-icon="fa-solid fa-phone">fa-solid fa-phone</option>
                                        <option value="fa-solid fa-calendar-times" data-icon="fa-solid fa-calendar-times">fa-solid fa-calendar-times</option>
                                        <option value="fa-solid fa-calendar-xmark" data-icon="fa-solid fa-calendar-xmark">fa-solid fa-calendar-xmark</option>
                                        <option value="fa-solid fa-child-reaching" data-icon="fa-solid fa-child-reaching">fa-solid fa-child-reaching</option>
                                        <option value="fa-solid fa-head-side-virus" data-icon="fa-solid fa-head-side-virus">fa-solid fa-head-side-virus</option>
                                        <option value="fa-solid fa-user-cog" data-icon="fa-solid fa-user-cog">fa-solid fa-user-cog</option>
                                        <option value="fa-solid fa-user-gear" data-icon="fa-solid fa-user-gear">fa-solid fa-user-gear</option>
                                        <option value="fa-solid fa-arrow-up-1-9" data-icon="fa-solid fa-arrow-up-1-9">fa-solid fa-arrow-up-1-9</option>
                                        <option value="fa-solid fa-sort-numeric-up" data-icon="fa-solid fa-sort-numeric-up">fa-solid fa-sort-numeric-up</option>
                                        <option value="fa-solid fa-door-closed" data-icon="fa-solid fa-door-closed">fa-solid fa-door-closed</option>
                                        <option value="fa-solid fa-shield-virus" data-icon="fa-solid fa-shield-virus">fa-solid fa-shield-virus</option>
                                        <option value="fa-solid fa-dice-six" data-icon="fa-solid fa-dice-six">fa-solid fa-dice-six</option>
                                        <option value="fa-solid fa-mosquito-net" data-icon="fa-solid fa-mosquito-net">fa-solid fa-mosquito-net</option>
                                        <option value="fa-solid fa-bridge-water" data-icon="fa-solid fa-bridge-water">fa-solid fa-bridge-water</option>
                                        <option value="fa-solid fa-person-booth" data-icon="fa-solid fa-person-booth">fa-solid fa-person-booth</option>
                                        <option value="fa-solid fa-text-width" data-icon="fa-solid fa-text-width">fa-solid fa-text-width</option>
                                        <option value="fa-solid fa-hat-wizard" data-icon="fa-solid fa-hat-wizard">fa-solid fa-hat-wizard</option>
                                        <option value="fa-solid fa-pen-fancy" data-icon="fa-solid fa-pen-fancy">fa-solid fa-pen-fancy</option>
                                        <option value="fa-solid fa-digging" data-icon="fa-solid fa-digging">fa-solid fa-digging</option>
                                        <option value="fa-solid fa-person-digging" data-icon="fa-solid fa-person-digging">fa-solid fa-person-digging</option>
                                        <option value="fa-solid fa-trash" data-icon="fa-solid fa-trash">fa-solid fa-trash</option>
                                        <option value="fa-solid fa-gauge-simple-med" data-icon="fa-solid fa-gauge-simple-med">fa-solid fa-gauge-simple-med</option>
                                        <option value="fa-solid fa-gauge-simple" data-icon="fa-solid fa-gauge-simple">fa-solid fa-gauge-simple</option>
                                        <option value="fa-solid fa-tachometer-average" data-icon="fa-solid fa-tachometer-average">fa-solid fa-tachometer-average</option>
                                        <option value="fa-solid fa-book-medical" data-icon="fa-solid fa-book-medical">fa-solid fa-book-medical</option>
                                        <option value="fa-solid fa-poo" data-icon="fa-solid fa-poo">fa-solid fa-poo</option>
                                        <option value="fa-solid fa-quote-right-alt" data-icon="fa-solid fa-quote-right-alt">fa-solid fa-quote-right-alt</option>
                                        <option value="fa-solid fa-quote-right" data-icon="fa-solid fa-quote-right">fa-solid fa-quote-right</option>
                                        <option value="fa-solid fa-shirt" data-icon="fa-solid fa-shirt">fa-solid fa-shirt</option>
                                        <option value="fa-solid fa-t-shirt" data-icon="fa-solid fa-t-shirt">fa-solid fa-t-shirt</option>
                                        <option value="fa-solid fa-tshirt" data-icon="fa-solid fa-tshirt">fa-solid fa-tshirt</option>
                                        <option value="fa-solid fa-cubes" data-icon="fa-solid fa-cubes">fa-solid fa-cubes</option>
                                        <option value="fa-solid fa-divide" data-icon="fa-solid fa-divide">fa-solid fa-divide</option>
                                        <option value="fa-solid fa-tenge-sign" data-icon="fa-solid fa-tenge-sign">fa-solid fa-tenge-sign</option>
                                        <option value="fa-solid fa-tenge" data-icon="fa-solid fa-tenge">fa-solid fa-tenge</option>
                                        <option value="fa-solid fa-headphones" data-icon="fa-solid fa-headphones">fa-solid fa-headphones</option>
                                        <option value="fa-solid fa-hands-holding" data-icon="fa-solid fa-hands-holding">fa-solid fa-hands-holding</option>
                                        <option value="fa-solid fa-hands-clapping" data-icon="fa-solid fa-hands-clapping">fa-solid fa-hands-clapping</option>
                                        <option value="fa-solid fa-republican" data-icon="fa-solid fa-republican">fa-solid fa-republican</option>
                                        <option value="fa-solid fa-arrow-left" data-icon="fa-solid fa-arrow-left">fa-solid fa-arrow-left</option>
                                        <option value="fa-solid fa-person-circle-xmark" data-icon="fa-solid fa-person-circle-xmark">fa-solid fa-person-circle-xmark</option>
                                        <option value="fa-solid fa-ruler" data-icon="fa-solid fa-ruler">fa-solid fa-ruler</option>
                                        <option value="fa-solid fa-align-left" data-icon="fa-solid fa-align-left">fa-solid fa-align-left</option>
                                        <option value="fa-solid fa-dice-d6" data-icon="fa-solid fa-dice-d6">fa-solid fa-dice-d6</option>
                                        <option value="fa-solid fa-restroom" data-icon="fa-solid fa-restroom">fa-solid fa-restroom</option>
                                        <option value="fa-solid fa-j" data-icon="fa-solid fa-j">fa-solid fa-j</option>
                                        <option value="fa-solid fa-users-viewfinder" data-icon="fa-solid fa-users-viewfinder">fa-solid fa-users-viewfinder</option>
                                        <option value="fa-solid fa-file-video" data-icon="fa-solid fa-file-video">fa-solid fa-file-video</option>
                                        <option value="fa-solid fa-external-link-alt" data-icon="fa-solid fa-external-link-alt">fa-solid fa-external-link-alt</option>
                                        <option value="fa-solid fa-up-right-from-square" data-icon="fa-solid fa-up-right-from-square">fa-solid fa-up-right-from-squaroption>li>
                                        <option value="fa-solid fa-table-cells" data-icon="fa-solid fa-table-cells">fa-solid fa-table-cells</option>
                                        <option value="fa-solid fa-th" data-icon="fa-solid fa-th">fa-solid fa-th</option>
                                        <option value="fa-solid fa-file-pdf" data-icon="fa-solid fa-file-pdf">fa-solid fa-file-pdf</option>
                                        <option value="fa-solid fa-bible" data-icon="fa-solid fa-bible">fa-solid fa-bible</option>
                                        <option value="fa-solid fa-book-bible" data-icon="fa-solid fa-book-bible">fa-solid fa-book-bible</option>
                                        <option value="fa-solid fa-o" data-icon="fa-solid fa-o">fa-solid fa-o</option>
                                        <option value="fa-solid fa-medkit" data-icon="fa-solid fa-medkit">fa-solid fa-medkit</option>
                                        <option value="fa-solid fa-suitcase-medical" data-icon="fa-solid fa-suitcase-medical">fa-solid fa-suitcase-medical</option>
                                        <option value="fa-solid fa-user-secret" data-icon="fa-solid fa-user-secret">fa-solid fa-user-secret</option>
                                        <option value="fa-solid fa-otter" data-icon="fa-solid fa-otter">fa-solid fa-otter</option>
                                        <option value="fa-solid fa-female" data-icon="fa-solid fa-female">fa-solid fa-female</option>
                                        <option value="fa-solid fa-person-dress" data-icon="fa-solid fa-person-dress">fa-solid fa-person-dress</option>
                                        <option value="fa-solid fa-comment-dollar" data-icon="fa-solid fa-comment-dollar">fa-solid fa-comment-dollar</option>
                                        <option value="fa-solid fa-briefcase-clock" data-icon="fa-solid fa-briefcase-clock">fa-solid fa-briefcase-clock</option>
                                        <option value="fa-solid fa-business-time" data-icon="fa-solid fa-business-time">fa-solid fa-business-time</option>
                                        <option value="fa-solid fa-table-cells-large" data-icon="fa-solid fa-table-cells-large">fa-solid fa-table-cells-large</option>
                                        <option value="fa-solid fa-th-large" data-icon="fa-solid fa-th-large">fa-solid fa-th-large</option>
                                        <option value="fa-solid fa-book-tanakh" data-icon="fa-solid fa-book-tanakh">fa-solid fa-book-tanakh</option>
                                        <option value="fa-solid fa-tanakh" data-icon="fa-solid fa-tanakh">fa-solid fa-tanakh</option>
                                        <option value="fa-solid fa-phone-volume" data-icon="fa-solid fa-phone-volume">fa-solid fa-phone-volume</option>
                                        <option value="fa-solid fa-volume-control-phone" data-icon="fa-solid fa-volume-control-phone">fa-solid fa-volume-control-phonoption>li>
                                        <option value="fa-solid fa-hat-cowboy-side" data-icon="fa-solid fa-hat-cowboy-side">fa-solid fa-hat-cowboy-side</option>
                                        <option value="fa-solid fa-clipboard-user" data-icon="fa-solid fa-clipboard-user">fa-solid fa-clipboard-user</option>
                                        <option value="fa-solid fa-child" data-icon="fa-solid fa-child">fa-solid fa-child</option>
                                        <option value="fa-solid fa-lira-sign" data-icon="fa-solid fa-lira-sign">fa-solid fa-lira-sign</option>
                                        <option value="fa-solid fa-satellite" data-icon="fa-solid fa-satellite">fa-solid fa-satellite</option>
                                        <option value="fa-solid fa-plane-lock" data-icon="fa-solid fa-plane-lock">fa-solid fa-plane-lock</option>
                                        <option value="fa-solid fa-tag" data-icon="fa-solid fa-tag">fa-solid fa-tag</option>
                                        <option value="fa-solid fa-comment" data-icon="fa-solid fa-comment">fa-solid fa-comment</option>
                                        <option value="fa-solid fa-birthday-cake" data-icon="fa-solid fa-birthday-cake">fa-solid fa-birthday-cake</option>
                                        <option value="fa-solid fa-cake-candles" data-icon="fa-solid fa-cake-candles">fa-solid fa-cake-candles</option>
                                        <option value="fa-solid fa-cake" data-icon="fa-solid fa-cake">fa-solid fa-cake</option>
                                        <option value="fa-solid fa-envelope" data-icon="fa-solid fa-envelope">fa-solid fa-envelope</option>
                                        <option value="fa-solid fa-angle-double-up" data-icon="fa-solid fa-angle-double-up">fa-solid fa-angle-double-up</option>
                                        <option value="fa-solid fa-angles-up" data-icon="fa-solid fa-angles-up">fa-solid fa-angles-up</option>
                                        <option value="fa-solid fa-paperclip" data-icon="fa-solid fa-paperclip">fa-solid fa-paperclip</option>
                                        <option value="fa-solid fa-arrow-right-to-city" data-icon="fa-solid fa-arrow-right-to-city">fa-solid fa-arrow-right-to-city</option>
                                        <option value="fa-solid fa-ribbon" data-icon="fa-solid fa-ribbon">fa-solid fa-ribbon</option>
                                        <option value="fa-solid fa-lungs" data-icon="fa-solid fa-lungs">fa-solid fa-lungs</option>
                                        <option value="fa-solid fa-arrow-up-9-1" data-icon="fa-solid fa-arrow-up-9-1">fa-solid fa-arrow-up-9-1</option>
                                        <option value="fa-solid fa-sort-numeric-up-alt" data-icon="fa-solid fa-sort-numeric-up-alt">fa-solid fa-sort-numeric-up-alt</option>
                                        <option value="fa-solid fa-litecoin-sign" data-icon="fa-solid fa-litecoin-sign">fa-solid fa-litecoin-sign</option>
                                        <option value="fa-solid fa-border-none" data-icon="fa-solid fa-border-none">fa-solid fa-border-none</option>
                                        <option value="fa-solid fa-circle-nodes" data-icon="fa-solid fa-circle-nodes">fa-solid fa-circle-nodes</option>
                                        <option value="fa-solid fa-parachute-box" data-icon="fa-solid fa-parachute-box">fa-solid fa-parachute-box</option>
                                        <option value="fa-solid fa-indent" data-icon="fa-solid fa-indent">fa-solid fa-indent</option>
                                        <option value="fa-solid fa-truck-field-un" data-icon="fa-solid fa-truck-field-un">fa-solid fa-truck-field-un</option>
                                        <option value="fa-solid fa-hourglass-empty" data-icon="fa-solid fa-hourglass-empty">fa-solid fa-hourglass-empty</option>
                                        <option value="fa-solid fa-hourglass" data-icon="fa-solid fa-hourglass">fa-solid fa-hourglass</option>
                                        <option value="fa-solid fa-mountain" data-icon="fa-solid fa-mountain">fa-solid fa-mountain</option>
                                        <option value="fa-solid fa-user-doctor" data-icon="fa-solid fa-user-doctor">fa-solid fa-user-doctor</option>
                                        <option value="fa-solid fa-user-md" data-icon="fa-solid fa-user-md">fa-solid fa-user-md</option>
                                        <option value="fa-solid fa-circle-info" data-icon="fa-solid fa-circle-info">fa-solid fa-circle-info</option>
                                        <option value="fa-solid fa-info-circle" data-icon="fa-solid fa-info-circle">fa-solid fa-info-circle</option>
                                        <option value="fa-solid fa-cloud-meatball" data-icon="fa-solid fa-cloud-meatball">fa-solid fa-cloud-meatball</option>
                                        <option value="fa-solid fa-camera-alt" data-icon="fa-solid fa-camera-alt">fa-solid fa-camera-alt</option>
                                        <option value="fa-solid fa-camera" data-icon="fa-solid fa-camera">fa-solid fa-camera</option>
                                        <option value="fa-solid fa-square-virus" data-icon="fa-solid fa-square-virus">fa-solid fa-square-virus</option>
                                        <option value="fa-solid fa-meteor" data-icon="fa-solid fa-meteor">fa-solid fa-meteor</option>
                                        <option value="fa-solid fa-car-on" data-icon="fa-solid fa-car-on">fa-solid fa-car-on</option>
                                        <option value="fa-solid fa-sleigh" data-icon="fa-solid fa-sleigh">fa-solid fa-sleigh</option>
                                        <option value="fa-solid fa-arrow-down-1-9" data-icon="fa-solid fa-arrow-down-1-9">fa-solid fa-arrow-down-1-9</option>
                                        <option value="fa-solid fa-sort-numeric-asc" data-icon="fa-solid fa-sort-numeric-asc">fa-solid fa-sort-numeric-asc</option>
                                        <option value="fa-solid fa-sort-numeric-down" data-icon="fa-solid fa-sort-numeric-down">fa-solid fa-sort-numeric-down</option>
                                        <option value="fa-solid fa-hand-holding-droplet" data-icon="fa-solid fa-hand-holding-droplet">fa-solid fa-hand-holding-dropleoption>li>
                                        <option value="fa-solid fa-hand-holding-water" data-icon="fa-solid fa-hand-holding-water">fa-solid fa-hand-holding-water</option>
                                        <option value="fa-solid fa-water" data-icon="fa-solid fa-water">fa-solid fa-water</option>
                                        <option value="fa-solid fa-calendar-check" data-icon="fa-solid fa-calendar-check">fa-solid fa-calendar-check</option>
                                        <option value="fa-solid fa-braille" data-icon="fa-solid fa-braille">fa-solid fa-braille</option>
                                        <option value="fa-solid fa-prescription-bottle-alt" data-icon="fa-solid fa-prescription-bottle-alt"option>fa-prescription-bottle-alt</span></li>
                                        <option value="fa-solid fa-prescription-bottle-medical" data-icon="fa-solid fa-prescription-bottle-medical"option>fa-prescription-bottle-medical</span></li>
                                        <option value="fa-solid fa-landmark" data-icon="fa-solid fa-landmark">fa-solid fa-landmark</option>
                                        <option value="fa-solid fa-truck" data-icon="fa-solid fa-truck">fa-solid fa-truck</option>
                                        <option value="fa-solid fa-crosshairs" data-icon="fa-solid fa-crosshairs">fa-solid fa-crosshairs</option>
                                        <option value="fa-solid fa-person-cane" data-icon="fa-solid fa-person-cane">fa-solid fa-person-cane</option>
                                        <option value="fa-solid fa-tent" data-icon="fa-solid fa-tent">fa-solid fa-tent</option>
                                        <option value="fa-solid fa-vest-patches" data-icon="fa-solid fa-vest-patches">fa-solid fa-vest-patches</option>
                                        <option value="fa-solid fa-check-double" data-icon="fa-solid fa-check-double">fa-solid fa-check-double</option>
                                        <option value="fa-solid fa-arrow-down-a-z" data-icon="fa-solid fa-arrow-down-a-z">fa-solid fa-arrow-down-a-z</option>
                                        <option value="fa-solid fa-sort-alpha-asc" data-icon="fa-solid fa-sort-alpha-asc">fa-solid fa-sort-alpha-asc</option>
                                        <option value="fa-solid fa-sort-alpha-down" data-icon="fa-solid fa-sort-alpha-down">fa-solid fa-sort-alpha-down</option>
                                        <option value="fa-solid fa-money-bill-wheat" data-icon="fa-solid fa-money-bill-wheat">fa-solid fa-money-bill-wheat</option>
                                        <option value="fa-solid fa-cookie" data-icon="fa-solid fa-cookie">fa-solid fa-cookie</option>
                                        <option value="fa-solid fa-arrow-left-rotate" data-icon="fa-solid fa-arrow-left-rotate">fa-solid fa-arrow-left-rotate</option>
                                        <option value="fa-solid fa-arrow-rotate-back" data-icon="fa-solid fa-arrow-rotate-back">fa-solid fa-arrow-rotate-back</option>
                                        <option value="fa-solid fa-arrow-rotate-backward" data-icon="fa-solid fa-arrow-rotate-backward">fa-solid fa-arrow-rotate-option>span></li>
                                        <option value="fa-solid fa-arrow-rotate-left" data-icon="fa-solid fa-arrow-rotate-left">fa-solid fa-arrow-rotate-left</option>
                                        <option value="fa-solid fa-undo" data-icon="fa-solid fa-undo">fa-solid fa-undo</option>
                                        <option value="fa-solid fa-hard-drive" data-icon="fa-solid fa-hard-drive">fa-solid fa-hard-drive</option>
                                        <option value="fa-solid fa-hdd" data-icon="fa-solid fa-hdd">fa-solid fa-hdd</option>
                                        <option value="fa-solid fa-face-grin-squint-tears" data-icon="fa-solid fa-face-grin-squint-tears">fa-solid fa-face-grin-squioption>span></li>
                                        <option value="fa-solid fa-grin-squint-tears" data-icon="fa-solid fa-grin-squint-tears">fa-solid fa-grin-squint-tears</option>
                                        <option value="fa-solid fa-dumbbell" data-icon="fa-solid fa-dumbbell">fa-solid fa-dumbbell</option>
                                        <option value="fa-solid fa-list-alt" data-icon="fa-solid fa-list-alt">fa-solid fa-list-alt</option>
                                        <option value="fa-solid fa-rectangle-list" data-icon="fa-solid fa-rectangle-list">fa-solid fa-rectangle-list</option>
                                        <option value="fa-solid fa-tarp-droplet" data-icon="fa-solid fa-tarp-droplet">fa-solid fa-tarp-droplet</option>
                                        <option value="fa-solid fa-house-medical-circle-check" data-icon="fa-solid fa-house-medical-circle-check"option>fa-house-medical-circle-check</span></li>
                                        <option value="fa-solid fa-person-skiing-nordic" data-icon="fa-solid fa-person-skiing-nordic">fa-solid fa-person-skiing-nordioption>li>
                                        <option value="fa-solid fa-skiing-nordic" data-icon="fa-solid fa-skiing-nordic">fa-solid fa-skiing-nordic</option>
                                        <option value="fa-solid fa-calendar-plus" data-icon="fa-solid fa-calendar-plus">fa-solid fa-calendar-plus</option>
                                        <option value="fa-solid fa-plane-arrival" data-icon="fa-solid fa-plane-arrival">fa-solid fa-plane-arrival</option>
                                        <option value="fa-solid fa-arrow-alt-circle-left" data-icon="fa-solid fa-arrow-alt-circle-left">fa-solid fa-arrow-alt-ciroption>span></li>
                                        <option value="fa-solid fa-circle-left" data-icon="fa-solid fa-circle-left">fa-solid fa-circle-left</option>
                                        <option value="fa-solid fa-subway" data-icon="fa-solid fa-subway">fa-solid fa-subway</option>
                                        <option value="fa-solid fa-train-subway" data-icon="fa-solid fa-train-subway">fa-solid fa-train-subway</option>
                                        <option value="fa-solid fa-chart-gantt" data-icon="fa-solid fa-chart-gantt">fa-solid fa-chart-gantt</option>
                                        <option value="fa-solid fa-indian-rupee-sign" data-icon="fa-solid fa-indian-rupee-sign">fa-solid fa-indian-rupee-sign</option>
                                        <option value="fa-solid fa-indian-rupee" data-icon="fa-solid fa-indian-rupee">fa-solid fa-indian-rupee</option>
                                        <option value="fa-solid fa-inr" data-icon="fa-solid fa-inr">fa-solid fa-inr</option>
                                        <option value="fa-solid fa-crop-alt" data-icon="fa-solid fa-crop-alt">fa-solid fa-crop-alt</option>
                                        <option value="fa-solid fa-crop-simple" data-icon="fa-solid fa-crop-simple">fa-solid fa-crop-simple</option>
                                        <option value="fa-solid fa-money-bill-1" data-icon="fa-solid fa-money-bill-1">fa-solid fa-money-bill-1</option>
                                        <option value="fa-solid fa-money-bill-alt" data-icon="fa-solid fa-money-bill-alt">fa-solid fa-money-bill-alt</option>
                                        <option value="fa-solid fa-left-long" data-icon="fa-solid fa-left-long">fa-solid fa-left-long</option>
                                        <option value="fa-solid fa-long-arrow-alt-left" data-icon="fa-solid fa-long-arrow-alt-left">fa-solid fa-long-arrow-alt-left</option>
                                        <option value="fa-solid fa-dna" data-icon="fa-solid fa-dna">fa-solid fa-dna</option>
                                        <option value="fa-solid fa-virus-slash" data-icon="fa-solid fa-virus-slash">fa-solid fa-virus-slash</option>
                                        <option value="fa-solid fa-minus" data-icon="fa-solid fa-minus">fa-solid fa-minus</option>
                                        <option value="fa-solid fa-subtract" data-icon="fa-solid fa-subtract">fa-solid fa-subtract</option>
                                        <option value="fa-solid fa-chess" data-icon="fa-solid fa-chess">fa-solid fa-chess</option>
                                        <option value="fa-solid fa-arrow-left-long" data-icon="fa-solid fa-arrow-left-long">fa-solid fa-arrow-left-long</option>
                                        <option value="fa-solid fa-long-arrow-left" data-icon="fa-solid fa-long-arrow-left">fa-solid fa-long-arrow-left</option>
                                        <option value="fa-solid fa-plug-circle-check" data-icon="fa-solid fa-plug-circle-check">fa-solid fa-plug-circle-check</option>
                                        <option value="fa-solid fa-street-view" data-icon="fa-solid fa-street-view">fa-solid fa-street-view</option>
                                        <option value="fa-solid fa-franc-sign" data-icon="fa-solid fa-franc-sign">fa-solid fa-franc-sign</option>
                                        <option value="fa-solid fa-volume-off" data-icon="fa-solid fa-volume-off">fa-solid fa-volume-off</option>
                                        <option value="fa-solid fa-american-sign-language-interpreting" data-icon="fa-solid fa-american-sign-language-interpreting"option>fa-american-sign-language-interpreting</span></li>
                                        <option value="fa-solid fa-asl-interpreting" data-icon="fa-solid fa-asl-interpreting">fa-solid fa-asl-interpreting</option>
                                        <li><i class="fa-solid fa-hands-american-sign-language-interpreting" data-icon="fa-solid <option-valuelanguage-interpreting"option>fa-hands-american-sign-language-interpreting</span></li>
                                        <option value="fa-solid fa-hands-asl-interpretingt:" \f2a3"}"="" data-icon="fa-solid fa-hands-asl-interpretingt:" \f2a3"}"=""option>fa-hands-asl-interpretingt:"\f2a3"}</span></li>
                                        <option value="fa-solid fa-cog" data-icon="fa-solid fa-cog">fa-solid fa-cog</option>
                                        <option value="fa-solid fa-gear" data-icon="fa-solid fa-gear">fa-solid fa-gear</option>
                                        <option value="fa-solid fa-droplet-slash" data-icon="fa-solid fa-droplet-slash">fa-solid fa-droplet-slash</option>
                                        <option value="fa-solid fa-tint-slash" data-icon="fa-solid fa-tint-slash">fa-solid fa-tint-slash</option>
                                        <option value="fa-solid fa-mosque" data-icon="fa-solid fa-mosque">fa-solid fa-mosque</option>
                                        <option value="fa-solid fa-mosquito" data-icon="fa-solid fa-mosquito">fa-solid fa-mosquito</option>
                                        <option value="fa-solid fa-star-of-david" data-icon="fa-solid fa-star-of-david">fa-solid fa-star-of-david</option>
                                        <option value="fa-solid fa-person-military-rifle" data-icon="fa-solid fa-person-military-rifle">fa-solid fa-person-militaoption>span></li>
                                        <option value="fa-solid fa-cart-shopping" data-icon="fa-solid fa-cart-shopping">fa-solid fa-cart-shopping</option>
                                        <option value="fa-solid fa-shopping-cart" data-icon="fa-solid fa-shopping-cart">fa-solid fa-shopping-cart</option>
                                        <option value="fa-solid fa-vials" data-icon="fa-solid fa-vials">fa-solid fa-vials</option>
                                        <option value="fa-solid fa-plug-circle-plus" data-icon="fa-solid fa-plug-circle-plus">fa-solid fa-plug-circle-plus</option>
                                        <option value="fa-solid fa-place-of-worship" data-icon="fa-solid fa-place-of-worship">fa-solid fa-place-of-worship</option>
                                        <option value="fa-solid fa-grip-vertical" data-icon="fa-solid fa-grip-vertical">fa-solid fa-grip-vertical</option>
                                        <option value="fa-solid fa-arrow-turn-up" data-icon="fa-solid fa-arrow-turn-up">fa-solid fa-arrow-turn-up</option>
                                        <option value="fa-solid fa-level-up" data-icon="fa-solid fa-level-up">fa-solid fa-level-up</option>
                                        <option value="fa-solid fa-u" data-icon="fa-solid fa-u">fa-solid fa-u</option>
                                        <option value="fa-solid fa-square-root-alt" data-icon="fa-solid fa-square-root-alt">fa-solid fa-square-root-alt</option>
                                        <option value="fa-solid fa-square-root-variable" data-icon="fa-solid fa-square-root-variable">fa-solid fa-square-root-variabloption>li>
                                        <option value="fa-solid fa-clock-four" data-icon="fa-solid fa-clock-four">fa-solid fa-clock-four</option>
                                        <option value="fa-solid fa-clock" data-icon="fa-solid fa-clock">fa-solid fa-clock</option>
                                        <option value="fa-solid fa-backward-step" data-icon="fa-solid fa-backward-step">fa-solid fa-backward-step</option>
                                        <option value="fa-solid fa-step-backward" data-icon="fa-solid fa-step-backward">fa-solid fa-step-backward</option>
                                        <option value="fa-solid fa-pallet" data-icon="fa-solid fa-pallet">fa-solid fa-pallet</option>
                                        <option value="fa-solid fa-faucet" data-icon="fa-solid fa-faucet">fa-solid fa-faucet</option>
                                        <option value="fa-solid fa-baseball-bat-ball" data-icon="fa-solid fa-baseball-bat-ball">fa-solid fa-baseball-bat-ball</option>
                                        <option value="fa-solid fa-s" data-icon="fa-solid fa-s">fa-solid fa-s</option>
                                        <option value="fa-solid fa-timeline" data-icon="fa-solid fa-timeline">fa-solid fa-timeline</option>
                                        <option value="fa-solid fa-keyboard" data-icon="fa-solid fa-keyboard">fa-solid fa-keyboard</option>
                                        <option value="fa-solid fa-caret-down" data-icon="fa-solid fa-caret-down">fa-solid fa-caret-down</option>
                                        <option value="fa-solid fa-clinic-medical" data-icon="fa-solid fa-clinic-medical">fa-solid fa-clinic-medical</option>
                                        <option value="fa-solid fa-house-chimney-medical" data-icon="fa-solid fa-house-chimney-medical">fa-solid fa-house-chimneyoption>span></li>
                                        <option value="fa-solid fa-temperature-3" data-icon="fa-solid fa-temperature-3">fa-solid fa-temperature-3</option>
                                        <option value="fa-solid fa-temperature-three-quarters" data-icon="fa-solid fa-temperature-three-quarters"option>fa-temperature-three-quarters</span></li>
                                        <option value="fa-solid fa-thermometer-3" data-icon="fa-solid fa-thermometer-3">fa-solid fa-thermometer-3</option>
                                        <option value="fa-solid fa-thermometer-three-quarters" data-icon="fa-solid fa-thermometer-three-quarters"option>fa-thermometer-three-quarters</span></li>
                                        <option value="fa-solid fa-mobile-android-alt" data-icon="fa-solid fa-mobile-android-alt">fa-solid fa-mobile-android-alt</option>
                                        <option value="fa-solid fa-mobile-screen" data-icon="fa-solid fa-mobile-screen">fa-solid fa-mobile-screen</option>
                                        <option value="fa-solid fa-plane-up" data-icon="fa-solid fa-plane-up">fa-solid fa-plane-up</option>
                                        <option value="fa-solid fa-piggy-bank" data-icon="fa-solid fa-piggy-bank">fa-solid fa-piggy-bank</option>
                                        <option value="fa-solid fa-battery-3" data-icon="fa-solid fa-battery-3">fa-solid fa-battery-3</option>
                                        <option value="fa-solid fa-battery-half" data-icon="fa-solid fa-battery-half">fa-solid fa-battery-half</option>
                                        <option value="fa-solid fa-mountain-city" data-icon="fa-solid fa-mountain-city">fa-solid fa-mountain-city</option>
                                        <option value="fa-solid fa-coins" data-icon="fa-solid fa-coins">fa-solid fa-coins</option>
                                        <option value="fa-solid fa-khanda" data-icon="fa-solid fa-khanda">fa-solid fa-khanda</option>
                                        <option value="fa-solid fa-sliders-h" data-icon="fa-solid fa-sliders-h">fa-solid fa-sliders-h</option>
                                        <option value="fa-solid fa-sliders" data-icon="fa-solid fa-sliders">fa-solid fa-sliders</option>
                                        <option value="fa-solid fa-folder-tree" data-icon="fa-solid fa-folder-tree">fa-solid fa-folder-tree</option>
                                        <option value="fa-solid fa-network-wired" data-icon="fa-solid fa-network-wired">fa-solid fa-network-wired</option>
                                        <option value="fa-solid fa-map-pin" data-icon="fa-solid fa-map-pin">fa-solid fa-map-pin</option>
                                        <option value="fa-solid fa-hamsa" data-icon="fa-solid fa-hamsa">fa-solid fa-hamsa</option>
                                        <option value="fa-solid fa-cent-sign" data-icon="fa-solid fa-cent-sign">fa-solid fa-cent-sign</option>
                                        <option value="fa-solid fa-flask" data-icon="fa-solid fa-flask">fa-solid fa-flask</option>
                                        <option value="fa-solid fa-person-pregnant" data-icon="fa-solid fa-person-pregnant">fa-solid fa-person-pregnant</option>
                                        <option value="fa-solid fa-wand-sparkles" data-icon="fa-solid fa-wand-sparkles">fa-solid fa-wand-sparkles</option>
                                        <option value="fa-solid fa-ellipsis-v" data-icon="fa-solid fa-ellipsis-v">fa-solid fa-ellipsis-v</option>
                                        <option value="fa-solid fa-ellipsis-vertical" data-icon="fa-solid fa-ellipsis-vertical">fa-solid fa-ellipsis-vertical</option>
                                        <option value="fa-solid fa-ticket" data-icon="fa-solid fa-ticket">fa-solid fa-ticket</option>
                                        <option value="fa-solid fa-power-off" data-icon="fa-solid fa-power-off">fa-solid fa-power-off</option>
                                        <option value="fa-solid fa-long-arrow-alt-right" data-icon="fa-solid fa-long-arrow-alt-right">fa-solid fa-long-arrow-alt-righoption>li>
                                        <option value="fa-solid fa-right-long" data-icon="fa-solid fa-right-long">fa-solid fa-right-long</option>
                                        <option value="fa-solid fa-flag-usa" data-icon="fa-solid fa-flag-usa">fa-solid fa-flag-usa</option>
                                        <option value="fa-solid fa-laptop-file" data-icon="fa-solid fa-laptop-file">fa-solid fa-laptop-file</option>
                                        <option value="fa-solid fa-teletype" data-icon="fa-solid fa-teletype">fa-solid fa-teletype</option>
                                        <option value="fa-solid fa-tty" data-icon="fa-solid fa-tty">fa-solid fa-tty</option>
                                        <option value="fa-solid fa-diagram-next" data-icon="fa-solid fa-diagram-next">fa-solid fa-diagram-next</option>
                                        <option value="fa-solid fa-person-rifle" data-icon="fa-solid fa-person-rifle">fa-solid fa-person-rifle</option>
                                        <option value="fa-solid fa-house-medical-circle-exclamation" data-icon="fa-solid fa-house-medical-circle-exclamation"option>fa-house-medical-circle-exclamation</span></li>
                                        <option value="fa-solid fa-closed-captioning" data-icon="fa-solid fa-closed-captioning">fa-solid fa-closed-captioning</option>
                                        <option value="fa-solid fa-hiking" data-icon="fa-solid fa-hiking">fa-solid fa-hiking</option>
                                        <option value="fa-solid fa-person-hiking" data-icon="fa-solid fa-person-hiking">fa-solid fa-person-hiking</option>
                                        <option value="fa-solid fa-venus-double" data-icon="fa-solid fa-venus-double">fa-solid fa-venus-double</option>
                                        <option value="fa-solid fa-images" data-icon="fa-solid fa-images">fa-solid fa-images</option>
                                        <option value="fa-solid fa-calculator" data-icon="fa-solid fa-calculator">fa-solid fa-calculator</option>
                                        <option value="fa-solid fa-people-pulling" data-icon="fa-solid fa-people-pulling">fa-solid fa-people-pulling</option>
                                        <option value="fa-solid fa-n" data-icon="fa-solid fa-n">fa-solid fa-n</option>
                                        <option value="fa-solid fa-cable-car" data-icon="fa-solid fa-cable-car">fa-solid fa-cable-car</option>
                                        <option value="fa-solid fa-tram" data-icon="fa-solid fa-tram">fa-solid fa-tram</option>
                                        <option value="fa-solid fa-cloud-rain" data-icon="fa-solid fa-cloud-rain">fa-solid fa-cloud-rain</option>
                                        <option value="fa-solid fa-building-circle-xmark" data-icon="fa-solid fa-building-circle-xmark">fa-solid fa-building-circoption>span></li>
                                        <option value="fa-solid fa-ship" data-icon="fa-solid fa-ship">fa-solid fa-ship</option>
                                        <option value="fa-solid fa-arrows-down-to-line" data-icon="fa-solid fa-arrows-down-to-line">fa-solid fa-arrows-down-to-line</option>
                                        <option value="fa-solid fa-download" data-icon="fa-solid fa-download">fa-solid fa-download</option>
                                        <option value="fa-solid fa-face-grin" data-icon="fa-solid fa-face-grin">fa-solid fa-face-grin</option>
                                        <option value="fa-solid fa-grin" data-icon="fa-solid fa-grin">fa-solid fa-grin</option>
                                        <option value="fa-solid fa-backspace" data-icon="fa-solid fa-backspace">fa-solid fa-backspace</option>
                                        <option value="fa-solid fa-delete-left" data-icon="fa-solid fa-delete-left">fa-solid fa-delete-left</option>
                                        <option value="fa-solid fa-eye-dropper-empty" data-icon="fa-solid fa-eye-dropper-empty">fa-solid fa-eye-dropper-empty</option>
                                        <option value="fa-solid fa-eye-dropper" data-icon="fa-solid fa-eye-dropper">fa-solid fa-eye-dropper</option>
                                        <option value="fa-solid fa-eyedropper" data-icon="fa-solid fa-eyedropper">fa-solid fa-eyedropper</option>
                                        <option value="fa-solid fa-file-circle-check" data-icon="fa-solid fa-file-circle-check">fa-solid fa-file-circle-check</option>
                                        <option value="fa-solid fa-forward" data-icon="fa-solid fa-forward">fa-solid fa-forward</option>
                                        <option value="fa-solid fa-mobile-android" data-icon="fa-solid fa-mobile-android">fa-solid fa-mobile-android</option>
                                        <option value="fa-solid fa-mobile-phone" data-icon="fa-solid fa-mobile-phone">fa-solid fa-mobile-phone</option>
                                        <option value="fa-solid fa-mobile" data-icon="fa-solid fa-mobile">fa-solid fa-mobile</option>
                                        <option value="fa-solid fa-face-meh" data-icon="fa-solid fa-face-meh">fa-solid fa-face-meh</option>
                                        <option value="fa-solid fa-meh" data-icon="fa-solid fa-meh">fa-solid fa-meh</option>
                                        <option value="fa-solid fa-align-center" data-icon="fa-solid fa-align-center">fa-solid fa-align-center</option>
                                        <option value="fa-solid fa-book-dead" data-icon="fa-solid fa-book-dead">fa-solid fa-book-dead</option>
                                        <option value="fa-solid fa-book-skull" data-icon="fa-solid fa-book-skull">fa-solid fa-book-skull</option>
                                        <option value="fa-solid fa-drivers-license" data-icon="fa-solid fa-drivers-license">fa-solid fa-drivers-license</option>
                                        <option value="fa-solid fa-id-card" data-icon="fa-solid fa-id-card">fa-solid fa-id-card</option>
                                        <option value="fa-solid fa-dedent" data-icon="fa-solid fa-dedent">fa-solid fa-dedent</option>
                                        <option value="fa-solid fa-outdent" data-icon="fa-solid fa-outdent">fa-solid fa-outdent</option>
                                        <option value="fa-solid fa-heart-circle-exclamation" data-icon="fa-solid fa-heart-circle-exclamation"option>fa-heart-circle-exclamation</span></li>
                                        <option value="fa-solid fa-home-alt" data-icon="fa-solid fa-home-alt">fa-solid fa-home-alt</option>
                                        <option value="fa-solid fa-home-lg-alt" data-icon="fa-solid fa-home-lg-alt">fa-solid fa-home-lg-alt</option>
                                        <option value="fa-solid fa-home" data-icon="fa-solid fa-home">fa-solid fa-home</option>
                                        <option value="fa-solid fa-house" data-icon="fa-solid fa-house">fa-solid fa-house</option>
                                        <option value="fa-solid fa-calendar-week" data-icon="fa-solid fa-calendar-week">fa-solid fa-calendar-week</option>
                                        <option value="fa-solid fa-laptop-medical" data-icon="fa-solid fa-laptop-medical">fa-solid fa-laptop-medical</option>
                                        <option value="fa-solid fa-b" data-icon="fa-solid fa-b">fa-solid fa-b</option>
                                        <option value="fa-solid fa-file-medical" data-icon="fa-solid fa-file-medical">fa-solid fa-file-medical</option>
                                        <option value="fa-solid fa-dice-one" data-icon="fa-solid fa-dice-one">fa-solid fa-dice-one</option>
                                        <option value="fa-solid fa-kiwi-bird" data-icon="fa-solid fa-kiwi-bird">fa-solid fa-kiwi-bird</option>
                                        <option value="fa-solid fa-arrow-right-arrow-left" data-icon="fa-solid fa-arrow-right-arrow-left">fa-solid fa-arrow-right-aroption>span></li>
                                        <option value="fa-solid fa-exchange" data-icon="fa-solid fa-exchange">fa-solid fa-exchange</option>
                                        <option value="fa-solid fa-redo-alt" data-icon="fa-solid fa-redo-alt">fa-solid fa-redo-alt</option>
                                        <option value="fa-solid fa-rotate-forward" data-icon="fa-solid fa-rotate-forward">fa-solid fa-rotate-forward</option>
                                        <option value="fa-solid fa-rotate-right" data-icon="fa-solid fa-rotate-right">fa-solid fa-rotate-right</option>
                                        <option value="fa-solid fa-cutlery" data-icon="fa-solid fa-cutlery">fa-solid fa-cutlery</option>
                                        <option value="fa-solid fa-utensils" data-icon="fa-solid fa-utensils">fa-solid fa-utensils</option>
                                        <option value="fa-solid fa-arrow-up-wide-short" data-icon="fa-solid fa-arrow-up-wide-short">fa-solid fa-arrow-up-wide-short</option>
                                        <option value="fa-solid fa-sort-amount-up" data-icon="fa-solid fa-sort-amount-up">fa-solid fa-sort-amount-up</option>
                                        <option value="fa-solid fa-mill-sign" data-icon="fa-solid fa-mill-sign">fa-solid fa-mill-sign</option>
                                        <option value="fa-solid fa-bowl-rice" data-icon="fa-solid fa-bowl-rice">fa-solid fa-bowl-rice</option>
                                        <option value="fa-solid fa-skull" data-icon="fa-solid fa-skull">fa-solid fa-skull</option>
                                        <option value="fa-solid fa-broadcast-tower" data-icon="fa-solid fa-broadcast-tower">fa-solid fa-broadcast-tower</option>
                                        <option value="fa-solid fa-tower-broadcast" data-icon="fa-solid fa-tower-broadcast">fa-solid fa-tower-broadcast</option>
                                        <option value="fa-solid fa-truck-pickup" data-icon="fa-solid fa-truck-pickup">fa-solid fa-truck-pickup</option>
                                        <option value="fa-solid fa-long-arrow-alt-up" data-icon="fa-solid fa-long-arrow-alt-up">fa-solid fa-long-arrow-alt-up</option>
                                        <option value="fa-solid fa-up-long" data-icon="fa-solid fa-up-long">fa-solid fa-up-long</option>
                                        <option value="fa-solid fa-stop" data-icon="fa-solid fa-stop">fa-solid fa-stop</option>
                                        <option value="fa-solid fa-code-merge" data-icon="fa-solid fa-code-merge">fa-solid fa-code-merge</option>
                                        <option value="fa-solid fa-upload" data-icon="fa-solid fa-upload">fa-solid fa-upload</option>
                                        <option value="fa-solid fa-hurricane" data-icon="fa-solid fa-hurricane">fa-solid fa-hurricane</option>
                                        <option value="fa-solid fa-mound" data-icon="fa-solid fa-mound">fa-solid fa-mound</option>
                                        <option value="fa-solid fa-toilet-portable" data-icon="fa-solid fa-toilet-portable">fa-solid fa-toilet-portable</option>
                                        <option value="fa-solid fa-compact-disc" data-icon="fa-solid fa-compact-disc">fa-solid fa-compact-disc</option>
                                        <option value="fa-solid fa-file-arrow-down" data-icon="fa-solid fa-file-arrow-down">fa-solid fa-file-arrow-down</option>
                                        <option value="fa-solid fa-file-download" data-icon="fa-solid fa-file-download">fa-solid fa-file-download</option>
                                        <option value="fa-solid fa-caravan" data-icon="fa-solid fa-caravan">fa-solid fa-caravan</option>
                                        <option value="fa-solid fa-shield-cat" data-icon="fa-solid fa-shield-cat">fa-solid fa-shield-cat</option>
                                        <option value="fa-solid fa-bolt" data-icon="fa-solid fa-bolt">fa-solid fa-bolt</option>
                                        <option value="fa-solid fa-zap" data-icon="fa-solid fa-zap">fa-solid fa-zap</option>
                                        <option value="fa-solid fa-glass-water" data-icon="fa-solid fa-glass-water">fa-solid fa-glass-water</option>
                                        <option value="fa-solid fa-oil-well" data-icon="fa-solid fa-oil-well">fa-solid fa-oil-well</option>
                                        <option value="fa-solid fa-vault" data-icon="fa-solid fa-vault">fa-solid fa-vault</option>
                                        <option value="fa-solid fa-mars" data-icon="fa-solid fa-mars">fa-solid fa-mars</option>
                                        <option value="fa-solid fa-toilet" data-icon="fa-solid fa-toilet">fa-solid fa-toilet</option>
                                        <option value="fa-solid fa-plane-circle-xmark" data-icon="fa-solid fa-plane-circle-xmark">fa-solid fa-plane-circle-xmark</option>
                                        <option value="fa-solid fa-cny" data-icon="fa-solid fa-cny">fa-solid fa-cny</option>
                                        <option value="fa-solid fa-jpy" data-icon="fa-solid fa-jpy">fa-solid fa-jpy</option>
                                        <option value="fa-solid fa-rmb" data-icon="fa-solid fa-rmb">fa-solid fa-rmb</option>
                                        <option value="fa-solid fa-yen-sign" data-icon="fa-solid fa-yen-sign">fa-solid fa-yen-sign</option>
                                        <option value="fa-solid fa-yen" data-icon="fa-solid fa-yen">fa-solid fa-yen</option>
                                        <option value="fa-solid fa-rouble" data-icon="fa-solid fa-rouble">fa-solid fa-rouble</option>
                                        <option value="fa-solid fa-rub" data-icon="fa-solid fa-rub">fa-solid fa-rub</option>
                                        <option value="fa-solid fa-ruble-sign" data-icon="fa-solid fa-ruble-sign">fa-solid fa-ruble-sign</option>
                                        <option value="fa-solid fa-ruble" data-icon="fa-solid fa-ruble">fa-solid fa-ruble</option>
                                        <option value="fa-solid fa-sun" data-icon="fa-solid fa-sun">fa-solid fa-sun</option>
                                        <option value="fa-solid fa-guitar" data-icon="fa-solid fa-guitar">fa-solid fa-guitar</option>
                                        <option value="fa-solid fa-face-laugh-wink" data-icon="fa-solid fa-face-laugh-wink">fa-solid fa-face-laugh-wink</option>
                                        <option value="fa-solid fa-laugh-wink" data-icon="fa-solid fa-laugh-wink">fa-solid fa-laugh-wink</option>
                                        <option value="fa-solid fa-horse-head" data-icon="fa-solid fa-horse-head">fa-solid fa-horse-head</option>
                                        <option value="fa-solid fa-bore-hole" data-icon="fa-solid fa-bore-hole">fa-solid fa-bore-hole</option>
                                        <option value="fa-solid fa-industry" data-icon="fa-solid fa-industry">fa-solid fa-industry</option>
                                        <option value="fa-solid fa-arrow-alt-circle-down" data-icon="fa-solid fa-arrow-alt-circle-down">fa-solid fa-arrow-alt-ciroption>span></li>
                                        <option value="fa-solid fa-circle-down" data-icon="fa-solid fa-circle-down">fa-solid fa-circle-down</option>
                                        <option value="fa-solid fa-arrows-turn-to-dots" data-icon="fa-solid fa-arrows-turn-to-dots">fa-solid fa-arrows-turn-to-dots</option>
                                        <option value="fa-solid fa-florin-sign" data-icon="fa-solid fa-florin-sign">fa-solid fa-florin-sign</option>
                                        <option value="fa-solid fa-arrow-down-short-wide" data-icon="fa-solid fa-arrow-down-short-wide">fa-solid fa-arrow-down-shoption>span></li>
                                        <option value="fa-solid fa-sort-amount-desc" data-icon="fa-solid fa-sort-amount-desc">fa-solid fa-sort-amount-desc</option>
                                        <option value="fa-solid fa-sort-amount-down-alt" data-icon="fa-solid fa-sort-amount-down-alt">fa-solid fa-sort-amount-down-aloption>li>
                                        <option value="fa-solid fa-less-than" data-icon="fa-solid fa-less-than">fa-solid fa-less-than</option>
                                        <option value="fa-solid fa-angle-down" data-icon="fa-solid fa-angle-down">fa-solid fa-angle-down</option>
                                        <option value="fa-solid fa-car-tunnel" data-icon="fa-solid fa-car-tunnel">fa-solid fa-car-tunnel</option>
                                        <option value="fa-solid fa-head-side-cough" data-icon="fa-solid fa-head-side-cough">fa-solid fa-head-side-cough</option>
                                        <option value="fa-solid fa-grip-lines" data-icon="fa-solid fa-grip-lines">fa-solid fa-grip-lines</option>
                                        <option value="fa-solid fa-thumbs-down" data-icon="fa-solid fa-thumbs-down">fa-solid fa-thumbs-down</option>
                                        <option value="fa-solid fa-user-lock" data-icon="fa-solid fa-user-lock">fa-solid fa-user-lock</option>
                                        <option value="fa-solid fa-arrow-right-long" data-icon="fa-solid fa-arrow-right-long">fa-solid fa-arrow-right-long</option>
                                        <option value="fa-solid fa-long-arrow-right" data-icon="fa-solid fa-long-arrow-right">fa-solid fa-long-arrow-right</option>
                                        <option value="fa-solid fa-anchor-circle-xmark" data-icon="fa-solid fa-anchor-circle-xmark">fa-solid fa-anchor-circle-xmark</option>
                                        <option value="fa-solid fa-ellipsis-h" data-icon="fa-solid fa-ellipsis-h">fa-solid fa-ellipsis-h</option>
                                        <option value="fa-solid fa-ellipsis" data-icon="fa-solid fa-ellipsis">fa-solid fa-ellipsis</option>
                                        <option value="fa-solid fa-chess-pawn" data-icon="fa-solid fa-chess-pawn">fa-solid fa-chess-pawn</option>
                                        <option value="fa-solid fa-first-aid" data-icon="fa-solid fa-first-aid">fa-solid fa-first-aid</option>
                                        <option value="fa-solid fa-kit-medical" data-icon="fa-solid fa-kit-medical">fa-solid fa-kit-medical</option>
                                        <option value="fa-solid fa-person-through-window" data-icon="fa-solid fa-person-through-window">fa-solid fa-person-througoption>span></li>
                                        <option value="fa-solid fa-toolbox" data-icon="fa-solid fa-toolbox">fa-solid fa-toolbox</option>
                                        <option value="fa-solid fa-hands-holding-circle" data-icon="fa-solid fa-hands-holding-circle">fa-solid fa-hands-holding-circloption>li>
                                        <option value="fa-solid fa-bug" data-icon="fa-solid fa-bug">fa-solid fa-bug</option>
                                        <option value="fa-solid fa-credit-card-alt" data-icon="fa-solid fa-credit-card-alt">fa-solid fa-credit-card-alt</option>
                                        <option value="fa-solid fa-credit-card" data-icon="fa-solid fa-credit-card">fa-solid fa-credit-card</option>
                                        <option value="fa-solid fa-automobile" data-icon="fa-solid fa-automobile">fa-solid fa-automobile</option>
                                        <option value="fa-solid fa-car" data-icon="fa-solid fa-car">fa-solid fa-car</option>
                                        <option value="fa-solid fa-hand-holding-hand" data-icon="fa-solid fa-hand-holding-hand">fa-solid fa-hand-holding-hand</option>
                                        <option value="fa-solid fa-book-open-reader" data-icon="fa-solid fa-book-open-reader">fa-solid fa-book-open-reader</option>
                                        <option value="fa-solid fa-book-reader" data-icon="fa-solid fa-book-reader">fa-solid fa-book-reader</option>
                                        <option value="fa-solid fa-mountain-sun" data-icon="fa-solid fa-mountain-sun">fa-solid fa-mountain-sun</option>
                                        <option value="fa-solid fa-arrows-left-right-to-line" data-icon="fa-solid fa-arrows-left-right-to-line"option>fa-arrows-left-right-to-line</span></li>
                                        <option value="fa-solid fa-dice-d20" data-icon="fa-solid fa-dice-d20">fa-solid fa-dice-d20</option>
                                        <option value="fa-solid fa-truck-droplet" data-icon="fa-solid fa-truck-droplet">fa-solid fa-truck-droplet</option>
                                        <option value="fa-solid fa-file-circle-xmark" data-icon="fa-solid fa-file-circle-xmark">fa-solid fa-file-circle-xmark</option>
                                        <option value="fa-solid fa-temperature-arrow-up" data-icon="fa-solid fa-temperature-arrow-up">fa-solid fa-temperature-arrow-uoption>li>
                                        <option value="fa-solid fa-temperature-up" data-icon="fa-solid fa-temperature-up">fa-solid fa-temperature-up</option>
                                        <option value="fa-solid fa-medal" data-icon="fa-solid fa-medal">fa-solid fa-medal</option>
                                        <option value="fa-solid fa-bed" data-icon="fa-solid fa-bed">fa-solid fa-bed</option>
                                        <option value="fa-solid fa-h-square" data-icon="fa-solid fa-h-square">fa-solid fa-h-square</option>
                                        <option value="fa-solid fa-square-h" data-icon="fa-solid fa-square-h">fa-solid fa-square-h</option>
                                        <option value="fa-solid fa-podcast" data-icon="fa-solid fa-podcast">fa-solid fa-podcast</option>
                                        <option value="fa-solid fa-temperature-4" data-icon="fa-solid fa-temperature-4">fa-solid fa-temperature-4</option>
                                        <option value="fa-solid fa-temperature-full" data-icon="fa-solid fa-temperature-full">fa-solid fa-temperature-full</option>
                                        <option value="fa-solid fa-thermometer-4" data-icon="fa-solid fa-thermometer-4">fa-solid fa-thermometer-4</option>
                                        <option value="fa-solid fa-thermometer-full" data-icon="fa-solid fa-thermometer-full">fa-solid fa-thermometer-full</option>
                                        <option value="fa-solid fa-bell" data-icon="fa-solid fa-bell">fa-solid fa-bell</option>
                                        <option value="fa-solid fa-superscript" data-icon="fa-solid fa-superscript">fa-solid fa-superscript</option>
                                        <option value="fa-solid fa-plug-circle-xmark" data-icon="fa-solid fa-plug-circle-xmark">fa-solid fa-plug-circle-xmark</option>
                                        <option value="fa-solid fa-star-of-life" data-icon="fa-solid fa-star-of-life">fa-solid fa-star-of-life</option>
                                        <option value="fa-solid fa-phone-slash" data-icon="fa-solid fa-phone-slash">fa-solid fa-phone-slash</option>
                                        <option value="fa-solid fa-paint-roller" data-icon="fa-solid fa-paint-roller">fa-solid fa-paint-roller</option>
                                        <option value="fa-solid fa-hands-helping" data-icon="fa-solid fa-hands-helping">fa-solid fa-hands-helping</option>
                                        <option value="fa-solid fa-handshake-angle" data-icon="fa-solid fa-handshake-angle">fa-solid fa-handshake-angle</option>
                                        <option value="fa-solid fa-location-dot" data-icon="fa-solid fa-location-dot">fa-solid fa-location-dot</option>
                                        <option value="fa-solid fa-map-marker-alt" data-icon="fa-solid fa-map-marker-alt">fa-solid fa-map-marker-alt</option>
                                        <option value="fa-solid fa-file" data-icon="fa-solid fa-file">fa-solid fa-file</option>
                                        <option value="fa-solid fa-greater-than" data-icon="fa-solid fa-greater-than">fa-solid fa-greater-than</option>
                                        <option value="fa-solid fa-person-swimming" data-icon="fa-solid fa-person-swimming">fa-solid fa-person-swimming</option>
                                        <option value="fa-solid fa-swimmer" data-icon="fa-solid fa-swimmer">fa-solid fa-swimmer</option>
                                        <option value="fa-solid fa-arrow-down" data-icon="fa-solid fa-arrow-down">fa-solid fa-arrow-down</option>
                                        <option value="fa-solid fa-droplet" data-icon="fa-solid fa-droplet">fa-solid fa-droplet</option>
                                        <option value="fa-solid fa-tint" data-icon="fa-solid fa-tint">fa-solid fa-tint</option>
                                        <option value="fa-solid fa-eraser" data-icon="fa-solid fa-eraser">fa-solid fa-eraser</option>
                                        <option value="fa-solid fa-earth-america" data-icon="fa-solid fa-earth-america">fa-solid fa-earth-america</option>
                                        <option value="fa-solid fa-earth-americas" data-icon="fa-solid fa-earth-americas">fa-solid fa-earth-americas</option>
                                        <option value="fa-solid fa-earth" data-icon="fa-solid fa-earth">fa-solid fa-earth</option>
                                        <option value="fa-solid fa-globe-americas" data-icon="fa-solid fa-globe-americas">fa-solid fa-globe-americas</option>
                                        <option value="fa-solid fa-person-burst" data-icon="fa-solid fa-person-burst">fa-solid fa-person-burst</option>
                                        <option value="fa-solid fa-dove" data-icon="fa-solid fa-dove">fa-solid fa-dove</option>
                                        <option value="fa-solid fa-battery-0" data-icon="fa-solid fa-battery-0">fa-solid fa-battery-0</option>
                                        <option value="fa-solid fa-battery-empty" data-icon="fa-solid fa-battery-empty">fa-solid fa-battery-empty</option>
                                        <option value="fa-solid fa-socks" data-icon="fa-solid fa-socks">fa-solid fa-socks</option>
                                        <option value="fa-solid fa-inbox" data-icon="fa-solid fa-inbox">fa-solid fa-inbox</option>
                                        <option value="fa-solid fa-section" data-icon="fa-solid fa-section">fa-solid fa-section</option>
                                        <option value="fa-solid fa-gauge-high" data-icon="fa-solid fa-gauge-high">fa-solid fa-gauge-high</option>
                                        <option value="fa-solid fa-tachometer-alt-fast" data-icon="fa-solid fa-tachometer-alt-fast">fa-solid fa-tachometer-alt-fast</option>
                                        <option value="fa-solid fa-tachometer-alt" data-icon="fa-solid fa-tachometer-alt">fa-solid fa-tachometer-alt</option>
                                        <option value="fa-solid fa-envelope-open-text" data-icon="fa-solid fa-envelope-open-text">fa-solid fa-envelope-open-text</option>
                                        <option value="fa-solid fa-hospital-alt" data-icon="fa-solid fa-hospital-alt">fa-solid fa-hospital-alt</option>
                                        <option value="fa-solid fa-hospital-wide" data-icon="fa-solid fa-hospital-wide">fa-solid fa-hospital-wide</option>
                                        <option value="fa-solid fa-hospital" data-icon="fa-solid fa-hospital">fa-solid fa-hospital</option>
                                        <option value="fa-solid fa-wine-bottle" data-icon="fa-solid fa-wine-bottle">fa-solid fa-wine-bottle</option>
                                        <option value="fa-solid fa-chess-rook" data-icon="fa-solid fa-chess-rook">fa-solid fa-chess-rook</option>
                                        <option value="fa-solid fa-bars-staggered" data-icon="fa-solid fa-bars-staggered">fa-solid fa-bars-staggered</option>
                                        <option value="fa-solid fa-reorder" data-icon="fa-solid fa-reorder">fa-solid fa-reorder</option>
                                        <option value="fa-solid fa-stream" data-icon="fa-solid fa-stream">fa-solid fa-stream</option>
                                        <option value="fa-solid fa-dharmachakra" data-icon="fa-solid fa-dharmachakra">fa-solid fa-dharmachakra</option>
                                        <option value="fa-solid fa-hotdog" data-icon="fa-solid fa-hotdog">fa-solid fa-hotdog</option>
                                        <option value="fa-solid fa-blind" data-icon="fa-solid fa-blind">fa-solid fa-blind</option>
                                        <option value="fa-solid fa-person-walking-with-cane" data-icon="fa-solid fa-person-walking-with-cane"option>fa-person-walking-with-cane</span></li>
                                        <option value="fa-solid fa-drum" data-icon="fa-solid fa-drum">fa-solid fa-drum</option>
                                        <option value="fa-solid fa-ice-cream" data-icon="fa-solid fa-ice-cream">fa-solid fa-ice-cream</option>
                                        <option value="fa-solid fa-heart-circle-bolt" data-icon="fa-solid fa-heart-circle-bolt">fa-solid fa-heart-circle-bolt</option>
                                        <option value="fa-solid fa-fax" data-icon="fa-solid fa-fax">fa-solid fa-fax</option>
                                        <option value="fa-solid fa-paragraph" data-icon="fa-solid fa-paragraph">fa-solid fa-paragraph</option>
                                        <option value="fa-solid fa-check-to-slot" data-icon="fa-solid fa-check-to-slot">fa-solid fa-check-to-slot</option>
                                        <option value="fa-solid fa-vote-yea" data-icon="fa-solid fa-vote-yea">fa-solid fa-vote-yea</option>
                                        <option value="fa-solid fa-star-half" data-icon="fa-solid fa-star-half">fa-solid fa-star-half</option>
                                        <option value="fa-solid fa-boxes-alt" data-icon="fa-solid fa-boxes-alt">fa-solid fa-boxes-alt</option>
                                        <option value="fa-solid fa-boxes-stacked" data-icon="fa-solid fa-boxes-stacked">fa-solid fa-boxes-stacked</option>
                                        <option value="fa-solid fa-boxes" data-icon="fa-solid fa-boxes">fa-solid fa-boxes</option>
                                        <option value="fa-solid fa-chain" data-icon="fa-solid fa-chain">fa-solid fa-chain</option>
                                        <option value="fa-solid fa-link" data-icon="fa-solid fa-link">fa-solid fa-link</option>
                                        <option value="fa-solid fa-assistive-listening-systems" data-icon="fa-solid fa-assistive-listening-systems"option>fa-assistive-listening-systems</span></li>
                                        <option value="fa-solid fa-ear-listen" data-icon="fa-solid fa-ear-listen">fa-solid fa-ear-listen</option>
                                        <option value="fa-solid fa-tree-city" data-icon="fa-solid fa-tree-city">fa-solid fa-tree-city</option>
                                        <option value="fa-solid fa-play" data-icon="fa-solid fa-play">fa-solid fa-play</option>
                                        <option value="fa-solid fa-font" data-icon="fa-solid fa-font">fa-solid fa-font</option>
                                        <option value="fa-solid fa-rupiah-sign" data-icon="fa-solid fa-rupiah-sign">fa-solid fa-rupiah-sign</option>
                                        <option value="fa-solid fa-magnifying-glass" data-icon="fa-solid fa-magnifying-glass">fa-solid fa-magnifying-glass</option>
                                        <option value="fa-solid fa-search" data-icon="fa-solid fa-search">fa-solid fa-search</option>
                                        <option value="fa-solid fa-ping-pong-paddle-ball" data-icon="fa-solid fa-ping-pong-paddle-ball">fa-solid fa-ping-pong-padoption>span></li>
                                        <option value="fa-solid fa-table-tennis-paddle-ball" data-icon="fa-solid fa-table-tennis-paddle-ball"option>fa-table-tennis-paddle-ball</span></li>
                                        <option value="fa-solid fa-table-tennis" data-icon="fa-solid fa-table-tennis">fa-solid fa-table-tennis</option>
                                        <option value="fa-solid fa-diagnoses" data-icon="fa-solid fa-diagnoses">fa-solid fa-diagnoses</option>
                                        <option value="fa-solid fa-person-dots-from-line" data-icon="fa-solid fa-person-dots-from-line">fa-solid fa-person-dots-foption>span></li>
                                        <option value="fa-solid fa-trash-can-arrow-up" data-icon="fa-solid fa-trash-can-arrow-up">fa-solid fa-trash-can-arrow-up</option>
                                        <option value="fa-solid fa-trash-restore-alt" data-icon="fa-solid fa-trash-restore-alt">fa-solid fa-trash-restore-alt</option>
                                        <option value="fa-solid fa-naira-sign" data-icon="fa-solid fa-naira-sign">fa-solid fa-naira-sign</option>
                                        <option value="fa-solid fa-cart-arrow-down" data-icon="fa-solid fa-cart-arrow-down">fa-solid fa-cart-arrow-down</option>
                                        <option value="fa-solid fa-walkie-talkie" data-icon="fa-solid fa-walkie-talkie">fa-solid fa-walkie-talkie</option>
                                        <option value="fa-solid fa-file-edit" data-icon="fa-solid fa-file-edit">fa-solid fa-file-edit</option>
                                        <option value="fa-solid fa-file-pen" data-icon="fa-solid fa-file-pen">fa-solid fa-file-pen</option>
                                        <option value="fa-solid fa-receipt" data-icon="fa-solid fa-receipt">fa-solid fa-receipt</option>
                                        <option value="fa-solid fa-pen-square" data-icon="fa-solid fa-pen-square">fa-solid fa-pen-square</option>
                                        <option value="fa-solid fa-pencil-square" data-icon="fa-solid fa-pencil-square">fa-solid fa-pencil-square</option>
                                        <option value="fa-solid fa-square-pen" data-icon="fa-solid fa-square-pen">fa-solid fa-square-pen</option>
                                        <option value="fa-solid fa-suitcase-rolling" data-icon="fa-solid fa-suitcase-rolling">fa-solid fa-suitcase-rolling</option>
                                        <option value="fa-solid fa-person-circle-exclamation" data-icon="fa-solid fa-person-circle-exclamation"option>fa-person-circle-exclamation</span></li>
                                        <option value="fa-solid fa-chevron-down" data-icon="fa-solid fa-chevron-down">fa-solid fa-chevron-down</option>
                                        <option value="fa-solid fa-battery-5" data-icon="fa-solid fa-battery-5">fa-solid fa-battery-5</option>
                                        <option value="fa-solid fa-battery-full" data-icon="fa-solid fa-battery-full">fa-solid fa-battery-full</option>
                                        <option value="fa-solid fa-battery" data-icon="fa-solid fa-battery">fa-solid fa-battery</option>
                                        <option value="fa-solid fa-skull-crossbones" data-icon="fa-solid fa-skull-crossbones">fa-solid fa-skull-crossbones</option>
                                        <option value="fa-solid fa-code-compare" data-icon="fa-solid fa-code-compare">fa-solid fa-code-compare</option>
                                        <option value="fa-solid fa-list-dots" data-icon="fa-solid fa-list-dots">fa-solid fa-list-dots</option>
                                        <option value="fa-solid fa-list-ul" data-icon="fa-solid fa-list-ul">fa-solid fa-list-ul</option>
                                        <option value="fa-solid fa-school-lock" data-icon="fa-solid fa-school-lock">fa-solid fa-school-lock</option>
                                        <option value="fa-solid fa-tower-cell" data-icon="fa-solid fa-tower-cell">fa-solid fa-tower-cell</option>
                                        <option value="fa-solid fa-down-long" data-icon="fa-solid fa-down-long">fa-solid fa-down-long</option>
                                        <option value="fa-solid fa-long-arrow-alt-down" data-icon="fa-solid fa-long-arrow-alt-down">fa-solid fa-long-arrow-alt-down</option>
                                        <option value="fa-solid fa-ranking-star" data-icon="fa-solid fa-ranking-star">fa-solid fa-ranking-star</option>
                                        <option value="fa-solid fa-chess-king" data-icon="fa-solid fa-chess-king">fa-solid fa-chess-king</option>
                                        <option value="fa-solid fa-person-harassing" data-icon="fa-solid fa-person-harassing">fa-solid fa-person-harassing</option>
                                        <option value="fa-solid fa-brazilian-real-sign" data-icon="fa-solid fa-brazilian-real-sign">fa-solid fa-brazilian-real-sign</option>
                                        <option value="fa-solid fa-landmark-alt" data-icon="fa-solid fa-landmark-alt">fa-solid fa-landmark-alt</option>
                                        <option value="fa-solid fa-landmark-dome" data-icon="fa-solid fa-landmark-dome">fa-solid fa-landmark-dome</option>
                                        <option value="fa-solid fa-arrow-up" data-icon="fa-solid fa-arrow-up">fa-solid fa-arrow-up</option>
                                        <option value="fa-solid fa-television" data-icon="fa-solid fa-television">fa-solid fa-television</option>
                                        <option value="fa-solid fa-tv-alt" data-icon="fa-solid fa-tv-alt">fa-solid fa-tv-alt</option>
                                        <option value="fa-solid fa-tv" data-icon="fa-solid fa-tv">fa-solid fa-tv</option>
                                        <option value="fa-solid fa-shrimp" data-icon="fa-solid fa-shrimp">fa-solid fa-shrimp</option>
                                        <option value="fa-solid fa-list-check" data-icon="fa-solid fa-list-check">fa-solid fa-list-check</option>
                                        <option value="fa-solid fa-tasks" data-icon="fa-solid fa-tasks">fa-solid fa-tasks</option>
                                        <option value="fa-solid fa-jug-detergent" data-icon="fa-solid fa-jug-detergent">fa-solid fa-jug-detergent</option>
                                        <option value="fa-solid fa-circle-user" data-icon="fa-solid fa-circle-user">fa-solid fa-circle-user</option>
                                        <option value="fa-solid fa-user-circle" data-icon="fa-solid fa-user-circle">fa-solid fa-user-circle</option>
                                        <option value="fa-solid fa-user-shield" data-icon="fa-solid fa-user-shield">fa-solid fa-user-shield</option>
                                        <option value="fa-solid fa-wind" data-icon="fa-solid fa-wind">fa-solid fa-wind</option>
                                        <option value="fa-solid fa-car-burst" data-icon="fa-solid fa-car-burst">fa-solid fa-car-burst</option>
                                        <option value="fa-solid fa-car-crash" data-icon="fa-solid fa-car-crash">fa-solid fa-car-crash</option>
                                        <option value="fa-solid fa-y" data-icon="fa-solid fa-y">fa-solid fa-y</option>
                                        <option value="fa-solid fa-person-snowboarding" data-icon="fa-solid fa-person-snowboarding">fa-solid fa-person-snowboarding</option>
                                        <option value="fa-solid fa-snowboarding" data-icon="fa-solid fa-snowboarding">fa-solid fa-snowboarding</option>
                                        <option value="fa-solid fa-shipping-fast" data-icon="fa-solid fa-shipping-fast">fa-solid fa-shipping-fast</option>
                                        <option value="fa-solid fa-truck-fast" data-icon="fa-solid fa-truck-fast">fa-solid fa-truck-fast</option>
                                        <option value="fa-solid fa-fish" data-icon="fa-solid fa-fish">fa-solid fa-fish</option>
                                        <option value="fa-solid fa-user-graduate" data-icon="fa-solid fa-user-graduate">fa-solid fa-user-graduate</option>
                                        <option value="fa-solid fa-adjust" data-icon="fa-solid fa-adjust">fa-solid fa-adjust</option>
                                        <option value="fa-solid fa-circle-half-stroke" data-icon="fa-solid fa-circle-half-stroke">fa-solid fa-circle-half-stroke</option>
                                        <option value="fa-solid fa-clapperboard" data-icon="fa-solid fa-clapperboard">fa-solid fa-clapperboard</option>
                                        <option value="fa-solid fa-circle-radiation" data-icon="fa-solid fa-circle-radiation">fa-solid fa-circle-radiation</option>
                                        <option value="fa-solid fa-radiation-alt" data-icon="fa-solid fa-radiation-alt">fa-solid fa-radiation-alt</option>
                                        <option value="fa-solid fa-baseball-ball" data-icon="fa-solid fa-baseball-ball">fa-solid fa-baseball-ball</option>
                                        <option value="fa-solid fa-baseball" data-icon="fa-solid fa-baseball">fa-solid fa-baseball</option>
                                        <option value="fa-solid fa-jet-fighter-up" data-icon="fa-solid fa-jet-fighter-up">fa-solid fa-jet-fighter-up</option>
                                        <option value="fa-solid fa-diagram-project" data-icon="fa-solid fa-diagram-project">fa-solid fa-diagram-project</option>
                                        <option value="fa-solid fa-project-diagram" data-icon="fa-solid fa-project-diagram">fa-solid fa-project-diagram</option>
                                        <option value="fa-solid fa-copy" data-icon="fa-solid fa-copy">fa-solid fa-copy</option>
                                        <option value="fa-solid fa-volume-mute" data-icon="fa-solid fa-volume-mute">fa-solid fa-volume-mute</option>
                                        <option value="fa-solid fa-volume-times" data-icon="fa-solid fa-volume-times">fa-solid fa-volume-times</option>
                                        <option value="fa-solid fa-volume-xmark" data-icon="fa-solid fa-volume-xmark">fa-solid fa-volume-xmark</option>
                                        <option value="fa-solid fa-hand-sparkles" data-icon="fa-solid fa-hand-sparkles">fa-solid fa-hand-sparkles</option>
                                        <option value="fa-solid fa-grip-horizontal" data-icon="fa-solid fa-grip-horizontal">fa-solid fa-grip-horizontal</option>
                                        <option value="fa-solid fa-grip" data-icon="fa-solid fa-grip">fa-solid fa-grip</option>
                                        <option value="fa-solid fa-share-from-square" data-icon="fa-solid fa-share-from-square">fa-solid fa-share-from-square</option>
                                        <option value="fa-solid fa-share-square" data-icon="fa-solid fa-share-square">fa-solid fa-share-square</option>
                                        <option value="fa-solid fa-child-combatant" data-icon="fa-solid fa-child-combatant">fa-solid fa-child-combatant</option>
                                        <option value="fa-solid fa-child-rifle" data-icon="fa-solid fa-child-rifle">fa-solid fa-child-rifle</option>
                                        <option value="fa-solid fa-gun" data-icon="fa-solid fa-gun">fa-solid fa-gun</option>
                                        <option value="fa-solid fa-phone-square" data-icon="fa-solid fa-phone-square">fa-solid fa-phone-square</option>
                                        <option value="fa-solid fa-square-phone" data-icon="fa-solid fa-square-phone">fa-solid fa-square-phone</option>
                                        <option value="fa-solid fa-add" data-icon="fa-solid fa-add">fa-solid fa-add</option>
                                        <option value="fa-solid fa-plus" data-icon="fa-solid fa-plus">fa-solid fa-plus</option>
                                        <option value="fa-solid fa-expand" data-icon="fa-solid fa-expand">fa-solid fa-expand</option>
                                        <option value="fa-solid fa-computer" data-icon="fa-solid fa-computer">fa-solid fa-computer</option>
                                        <option value="fa-solid fa-close" data-icon="fa-solid fa-close">fa-solid fa-close</option>
                                        <option value="fa-solid fa-multiply" data-icon="fa-solid fa-multiply">fa-solid fa-multiply</option>
                                        <option value="fa-solid fa-remove" data-icon="fa-solid fa-remove">fa-solid fa-remove</option>
                                        <option value="fa-solid fa-times" data-icon="fa-solid fa-times">fa-solid fa-times</option>
                                        <option value="fa-solid fa-xmark" data-icon="fa-solid fa-xmark">fa-solid fa-xmark</option>
                                        <option value="fa-solid fa-arrows-up-down-left-right" data-icon="fa-solid fa-arrows-up-down-left-right"option>fa-arrows-up-down-left-right</span></li>
                                        <option value="fa-solid fa-arrows" data-icon="fa-solid fa-arrows">fa-solid fa-arrows</option>
                                        <option value="fa-solid fa-chalkboard-teacher" data-icon="fa-solid fa-chalkboard-teacher">fa-solid fa-chalkboard-teacher</option>
                                        <option value="fa-solid fa-chalkboard-user" data-icon="fa-solid fa-chalkboard-user">fa-solid fa-chalkboard-user</option>
                                        <option value="fa-solid fa-peso-sign" data-icon="fa-solid fa-peso-sign">fa-solid fa-peso-sign</option>
                                        <option value="fa-solid fa-building-shield" data-icon="fa-solid fa-building-shield">fa-solid fa-building-shield</option>
                                        <option value="fa-solid fa-baby" data-icon="fa-solid fa-baby">fa-solid fa-baby</option>
                                        <option value="fa-solid fa-users-line" data-icon="fa-solid fa-users-line">fa-solid fa-users-line</option>
                                        <option value="fa-solid fa-quote-left-alt" data-icon="fa-solid fa-quote-left-alt">fa-solid fa-quote-left-alt</option>
                                        <option value="fa-solid fa-quote-left" data-icon="fa-solid fa-quote-left">fa-solid fa-quote-left</option>
                                        <option value="fa-solid fa-tractor" data-icon="fa-solid fa-tractor">fa-solid fa-tractor</option>
                                        <option value="fa-solid fa-trash-arrow-up" data-icon="fa-solid fa-trash-arrow-up">fa-solid fa-trash-arrow-up</option>
                                        <option value="fa-solid fa-trash-restore" data-icon="fa-solid fa-trash-restore">fa-solid fa-trash-restore</option>
                                        <option value="fa-solid fa-arrow-down-up-lock" data-icon="fa-solid fa-arrow-down-up-lock">fa-solid fa-arrow-down-up-lock</option>
                                        <option value="fa-solid fa-lines-leaning" data-icon="fa-solid fa-lines-leaning">fa-solid fa-lines-leaning</option>
                                        <option value="fa-solid fa-ruler-combined" data-icon="fa-solid fa-ruler-combined">fa-solid fa-ruler-combined</option>
                                        <option value="fa-solid fa-copyright" data-icon="fa-solid fa-copyright">fa-solid fa-copyright</option>
                                        <option value="fa-solid fa-equals" data-icon="fa-solid fa-equals">fa-solid fa-equals</option>
                                        <option value="fa-solid fa-blender" data-icon="fa-solid fa-blender">fa-solid fa-blender</option>
                                        <option value="fa-solid fa-teeth" data-icon="fa-solid fa-teeth">fa-solid fa-teeth</option>
                                        <option value="fa-solid fa-ils" data-icon="fa-solid fa-ils">fa-solid fa-ils</option>
                                        <option value="fa-solid fa-shekel-sign" data-icon="fa-solid fa-shekel-sign">fa-solid fa-shekel-sign</option>
                                        <option value="fa-solid fa-shekel" data-icon="fa-solid fa-shekel">fa-solid fa-shekel</option>
                                        <option value="fa-solid fa-sheqel-sign" data-icon="fa-solid fa-sheqel-sign">fa-solid fa-sheqel-sign</option>
                                        <option value="fa-solid fa-sheqel" data-icon="fa-solid fa-sheqel">fa-solid fa-sheqel</option>
                                        <option value="fa-solid fa-map" data-icon="fa-solid fa-map">fa-solid fa-map</option>
                                        <option value="fa-solid fa-rocket" data-icon="fa-solid fa-rocket">fa-solid fa-rocket</option>
                                        <option value="fa-solid fa-photo-film" data-icon="fa-solid fa-photo-film">fa-solid fa-photo-film</option>
                                        <option value="fa-solid fa-photo-video" data-icon="fa-solid fa-photo-video">fa-solid fa-photo-video</option>
                                        <option value="fa-solid fa-folder-minus" data-icon="fa-solid fa-folder-minus">fa-solid fa-folder-minus</option>
                                        <option value="fa-solid fa-store" data-icon="fa-solid fa-store">fa-solid fa-store</option>
                                        <option value="fa-solid fa-arrow-trend-up" data-icon="fa-solid fa-arrow-trend-up">fa-solid fa-arrow-trend-up</option>
                                        <option value="fa-solid fa-plug-circle-minus" data-icon="fa-solid fa-plug-circle-minus">fa-solid fa-plug-circle-minus</option>
                                        <option value="fa-solid fa-sign-hanging" data-icon="fa-solid fa-sign-hanging">fa-solid fa-sign-hanging</option>
                                        <option value="fa-solid fa-sign" data-icon="fa-solid fa-sign">fa-solid fa-sign</option>
                                        <option value="fa-solid fa-bezier-curve" data-icon="fa-solid fa-bezier-curve">fa-solid fa-bezier-curve</option>
                                        <option value="fa-solid fa-bell-slash" data-icon="fa-solid fa-bell-slash">fa-solid fa-bell-slash</option>
                                        <option value="fa-solid fa-tablet-android" data-icon="fa-solid fa-tablet-android">fa-solid fa-tablet-android</option>
                                        <option value="fa-solid fa-tablet" data-icon="fa-solid fa-tablet">fa-solid fa-tablet</option>
                                        <option value="fa-solid fa-school-flag" data-icon="fa-solid fa-school-flag">fa-solid fa-school-flag</option>
                                        <option value="fa-solid fa-fill" data-icon="fa-solid fa-fill">fa-solid fa-fill</option>
                                        <option value="fa-solid fa-angle-up" data-icon="fa-solid fa-angle-up">fa-solid fa-angle-up</option>
                                        <option value="fa-solid fa-drumstick-bite" data-icon="fa-solid fa-drumstick-bite">fa-solid fa-drumstick-bite</option>
                                        <option value="fa-solid fa-holly-berry" data-icon="fa-solid fa-holly-berry">fa-solid fa-holly-berry</option>
                                        <option value="fa-solid fa-chevron-left" data-icon="fa-solid fa-chevron-left">fa-solid fa-chevron-left</option>
                                        <option value="fa-solid fa-bacteria" data-icon="fa-solid fa-bacteria">fa-solid fa-bacteria</option>
                                        <option value="fa-solid fa-hand-lizard" data-icon="fa-solid fa-hand-lizard">fa-solid fa-hand-lizard</option>
                                        <option value="fa-solid fa-notdef" data-icon="fa-solid fa-notdef">fa-solid fa-notdef</option>
                                        <option value="fa-solid fa-disease" data-icon="fa-solid fa-disease">fa-solid fa-disease</option>
                                        <option value="fa-solid fa-briefcase-medical" data-icon="fa-solid fa-briefcase-medical">fa-solid fa-briefcase-medical</option>
                                        <option value="fa-solid fa-genderless" data-icon="fa-solid fa-genderless">fa-solid fa-genderless</option>
                                        <option value="fa-solid fa-chevron-right" data-icon="fa-solid fa-chevron-right">fa-solid fa-chevron-right</option>
                                        <option value="fa-solid fa-retweet" data-icon="fa-solid fa-retweet">fa-solid fa-retweet</option>
                                        <option value="fa-solid fa-car-alt" data-icon="fa-solid fa-car-alt">fa-solid fa-car-alt</option>
                                        <option value="fa-solid fa-car-rear" data-icon="fa-solid fa-car-rear">fa-solid fa-car-rear</option>
                                        <option value="fa-solid fa-pump-soap" data-icon="fa-solid fa-pump-soap">fa-solid fa-pump-soap</option>
                                        <option value="fa-solid fa-video-slash" data-icon="fa-solid fa-video-slash">fa-solid fa-video-slash</option>
                                        <option value="fa-solid fa-battery-2" data-icon="fa-solid fa-battery-2">fa-solid fa-battery-2</option>
                                        <option value="fa-solid fa-battery-quarter" data-icon="fa-solid fa-battery-quarter">fa-solid fa-battery-quarter</option>
                                        <option value="fa-solid fa-radio" data-icon="fa-solid fa-radio">fa-solid fa-radio</option>
                                        <option value="fa-solid fa-baby-carriage" data-icon="fa-solid fa-baby-carriage">fa-solid fa-baby-carriage</option>
                                        <option value="fa-solid fa-carriage-baby" data-icon="fa-solid fa-carriage-baby">fa-solid fa-carriage-baby</option>
                                        <option value="fa-solid fa-traffic-light" data-icon="fa-solid fa-traffic-light">fa-solid fa-traffic-light</option>
                                        <option value="fa-solid fa-thermometer" data-icon="fa-solid fa-thermometer">fa-solid fa-thermometer</option>
                                        <option value="fa-solid fa-vr-cardboard" data-icon="fa-solid fa-vr-cardboard">fa-solid fa-vr-cardboard</option>
                                        <option value="fa-solid fa-hand-middle-finger" data-icon="fa-solid fa-hand-middle-finger">fa-solid fa-hand-middle-finger</option>
                                        <option value="fa-solid fa-percent" data-icon="fa-solid fa-percent">fa-solid fa-percent</option>
                                        <option value="fa-solid fa-percentage" data-icon="fa-solid fa-percentage">fa-solid fa-percentage</option>
                                        <option value="fa-solid fa-truck-moving" data-icon="fa-solid fa-truck-moving">fa-solid fa-truck-moving</option>
                                        <option value="fa-solid fa-glass-water-droplet" data-icon="fa-solid fa-glass-water-droplet">fa-solid fa-glass-water-droplet</option>
                                        <option value="fa-solid fa-display" data-icon="fa-solid fa-display">fa-solid fa-display</option>
                                        <option value="fa-solid fa-face-smile" data-icon="fa-solid fa-face-smile">fa-solid fa-face-smile</option>
                                        <option value="fa-solid fa-smile" data-icon="fa-solid fa-smile">fa-solid fa-smile</option>
                                        <option value="fa-solid fa-thumb-tack" data-icon="fa-solid fa-thumb-tack">fa-solid fa-thumb-tack</option>
                                        <option value="fa-solid fa-thumbtack" data-icon="fa-solid fa-thumbtack">fa-solid fa-thumbtack</option>
                                        <option value="fa-solid fa-trophy" data-icon="fa-solid fa-trophy">fa-solid fa-trophy</option>
                                        <option value="fa-solid fa-person-praying" data-icon="fa-solid fa-person-praying">fa-solid fa-person-praying</option>
                                        <option value="fa-solid fa-pray" data-icon="fa-solid fa-pray">fa-solid fa-pray</option>
                                        <option value="fa-solid fa-hammer" data-icon="fa-solid fa-hammer">fa-solid fa-hammer</option>
                                        <option value="fa-solid fa-hand-peace" data-icon="fa-solid fa-hand-peace">fa-solid fa-hand-peace</option>
                                        <option value="fa-solid fa-rotate" data-icon="fa-solid fa-rotate">fa-solid fa-rotate</option>
                                        <option value="fa-solid fa-sync-alt" data-icon="fa-solid fa-sync-alt">fa-solid fa-sync-alt</option>
                                        <option value="fa-solid fa-spinner" data-icon="fa-solid fa-spinner">fa-solid fa-spinner</option>
                                        <option value="fa-solid fa-robot" data-icon="fa-solid fa-robot">fa-solid fa-robot</option>
                                        <option value="fa-solid fa-peace" data-icon="fa-solid fa-peace">fa-solid fa-peace</option>
                                        <option value="fa-solid fa-cogs" data-icon="fa-solid fa-cogs">fa-solid fa-cogs</option>
                                        <option value="fa-solid fa-gears" data-icon="fa-solid fa-gears">fa-solid fa-gears</option>
                                        <option value="fa-solid fa-warehouse" data-icon="fa-solid fa-warehouse">fa-solid fa-warehouse</option>
                                        <option value="fa-solid fa-arrow-up-right-dots" data-icon="fa-solid fa-arrow-up-right-dots">fa-solid fa-arrow-up-right-dots</option>
                                        <option value="fa-solid fa-splotch" data-icon="fa-solid fa-splotch">fa-solid fa-splotch</option>
                                        <option value="fa-solid fa-face-grin-hearts" data-icon="fa-solid fa-face-grin-hearts">fa-solid fa-face-grin-hearts</option>
                                        <option value="fa-solid fa-grin-hearts" data-icon="fa-solid fa-grin-hearts">fa-solid fa-grin-hearts</option>
                                        <option value="fa-solid fa-dice-four" data-icon="fa-solid fa-dice-four">fa-solid fa-dice-four</option>
                                        <option value="fa-solid fa-sim-card" data-icon="fa-solid fa-sim-card">fa-solid fa-sim-card</option>
                                        <option value="fa-solid fa-transgender-alt" data-icon="fa-solid fa-transgender-alt">fa-solid fa-transgender-alt</option>
                                        <option value="fa-solid fa-transgender" data-icon="fa-solid fa-transgender">fa-solid fa-transgender</option>
                                        <option value="fa-solid fa-mercury" data-icon="fa-solid fa-mercury">fa-solid fa-mercury</option>
                                        <option value="fa-solid fa-arrow-turn-down" data-icon="fa-solid fa-arrow-turn-down">fa-solid fa-arrow-turn-down</option>
                                        <option value="fa-solid fa-level-down" data-icon="fa-solid fa-level-down">fa-solid fa-level-down</option>
                                        <option value="fa-solid fa-person-falling-burst" data-icon="fa-solid fa-person-falling-burst">fa-solid fa-person-falling-bursoption>li>
                                        <option value="fa-solid fa-award" data-icon="fa-solid fa-award">fa-solid fa-award</option>
                                        <option value="fa-solid fa-ticket-alt" data-icon="fa-solid fa-ticket-alt">fa-solid fa-ticket-alt</option>
                                        <option value="fa-solid fa-ticket-simple" data-icon="fa-solid fa-ticket-simple">fa-solid fa-ticket-simple</option>
                                        <option value="fa-solid fa-building" data-icon="fa-solid fa-building">fa-solid fa-building</option>
                                        <option value="fa-solid fa-angle-double-left" data-icon="fa-solid fa-angle-double-left">fa-solid fa-angle-double-left</option>
                                        <option value="fa-solid fa-angles-left" data-icon="fa-solid fa-angles-left">fa-solid fa-angles-left</option>
                                        <option value="fa-solid fa-qrcode" data-icon="fa-solid fa-qrcode">fa-solid fa-qrcode</option>
                                        <option value="fa-solid fa-clock-rotate-left" data-icon="fa-solid fa-clock-rotate-left">fa-solid fa-clock-rotate-left</option>
                                        <option value="fa-solid fa-history" data-icon="fa-solid fa-history">fa-solid fa-history</option>
                                        <option value="fa-solid fa-face-grin-beam-sweat" data-icon="fa-solid fa-face-grin-beam-sweat">fa-solid fa-face-grin-beam-sweaoption>li>
                                        <option value="fa-solid fa-grin-beam-sweat" data-icon="fa-solid fa-grin-beam-sweat">fa-solid fa-grin-beam-sweat</option>
                                        <option value="fa-solid fa-arrow-right-from-file" data-icon="fa-solid fa-arrow-right-from-file">fa-solid fa-arrow-right-foption>span></li>
                                        <option value="fa-solid fa-file-export" data-icon="fa-solid fa-file-export">fa-solid fa-file-export</option>
                                        <option value="fa-solid fa-shield-blank" data-icon="fa-solid fa-shield-blank">fa-solid fa-shield-blank</option>
                                        <option value="fa-solid fa-shield" data-icon="fa-solid fa-shield">fa-solid fa-shield</option>
                                        <option value="fa-solid fa-arrow-up-short-wide" data-icon="fa-solid fa-arrow-up-short-wide">fa-solid fa-arrow-up-short-wide</option>
                                        <option value="fa-solid fa-sort-amount-up-alt" data-icon="fa-solid fa-sort-amount-up-alt">fa-solid fa-sort-amount-up-alt</option>
                                        <option value="fa-solid fa-house-medical" data-icon="fa-solid fa-house-medical">fa-solid fa-house-medical</option>
                                        <option value="fa-solid fa-golf-ball-tee" data-icon="fa-solid fa-golf-ball-tee">fa-solid fa-golf-ball-tee</option>
                                        <option value="fa-solid fa-golf-ball" data-icon="fa-solid fa-golf-ball">fa-solid fa-golf-ball</option>
                                        <option value="fa-solid fa-chevron-circle-left" data-icon="fa-solid fa-chevron-circle-left">fa-solid fa-chevron-circle-left</option>
                                        <option value="fa-solid fa-circle-chevron-left" data-icon="fa-solid fa-circle-chevron-left">fa-solid fa-circle-chevron-left</option>
                                        <option value="fa-solid fa-house-chimney-window" data-icon="fa-solid fa-house-chimney-window">fa-solid fa-house-chimney-windooption>li>
                                        <option value="fa-solid fa-pen-nib" data-icon="fa-solid fa-pen-nib">fa-solid fa-pen-nib</option>
                                        <option value="fa-solid fa-tent-arrow-turn-left" data-icon="fa-solid fa-tent-arrow-turn-left">fa-solid fa-tent-arrow-turn-lefoption>li>
                                        <option value="fa-solid fa-tents" data-icon="fa-solid fa-tents">fa-solid fa-tents</option>
                                        <option value="fa-solid fa-magic" data-icon="fa-solid fa-magic">fa-solid fa-magic</option>
                                        <option value="fa-solid fa-wand-magic" data-icon="fa-solid fa-wand-magic">fa-solid fa-wand-magic</option>
                                        <option value="fa-solid fa-dog" data-icon="fa-solid fa-dog">fa-solid fa-dog</option>
                                        <option value="fa-solid fa-carrot" data-icon="fa-solid fa-carrot">fa-solid fa-carrot</option>
                                        <option value="fa-solid fa-moon" data-icon="fa-solid fa-moon">fa-solid fa-moon</option>
                                        <option value="fa-solid fa-wine-glass-alt" data-icon="fa-solid fa-wine-glass-alt">fa-solid fa-wine-glass-alt</option>
                                        <option value="fa-solid fa-wine-glass-empty" data-icon="fa-solid fa-wine-glass-empty">fa-solid fa-wine-glass-empty</option>
                                        <option value="fa-solid fa-cheese" data-icon="fa-solid fa-cheese">fa-solid fa-cheese</option>
                                        <option value="fa-solid fa-yin-yang" data-icon="fa-solid fa-yin-yang">fa-solid fa-yin-yang</option>
                                        <option value="fa-solid fa-music" data-icon="fa-solid fa-music">fa-solid fa-music</option>
                                        <option value="fa-solid fa-code-commit" data-icon="fa-solid fa-code-commit">fa-solid fa-code-commit</option>
                                        <option value="fa-solid fa-temperature-low" data-icon="fa-solid fa-temperature-low">fa-solid fa-temperature-low</option>
                                        <option value="fa-solid fa-biking" data-icon="fa-solid fa-biking">fa-solid fa-biking</option>
                                        <option value="fa-solid fa-person-biking" data-icon="fa-solid fa-person-biking">fa-solid fa-person-biking</option>
                                        <option value="fa-solid fa-broom" data-icon="fa-solid fa-broom">fa-solid fa-broom</option>
                                        <option value="fa-solid fa-shield-heart" data-icon="fa-solid fa-shield-heart">fa-solid fa-shield-heart</option>
                                        <option value="fa-solid fa-gopuram" data-icon="fa-solid fa-gopuram">fa-solid fa-gopuram</option>
                                        <option value="fa-solid fa-earth-oceania" data-icon="fa-solid fa-earth-oceania">fa-solid fa-earth-oceania</option>
                                        <option value="fa-solid fa-globe-oceania" data-icon="fa-solid fa-globe-oceania">fa-solid fa-globe-oceania</option>
                                        <option value="fa-solid fa-square-xmark" data-icon="fa-solid fa-square-xmark">fa-solid fa-square-xmark</option>
                                        <option value="fa-solid fa-times-square" data-icon="fa-solid fa-times-square">fa-solid fa-times-square</option>
                                        <option value="fa-solid fa-xmark-square" data-icon="fa-solid fa-xmark-square">fa-solid fa-xmark-square</option>
                                        <option value="fa-solid fa-hashtag" data-icon="fa-solid fa-hashtag">fa-solid fa-hashtag</option>
                                        <option value="fa-solid fa-expand-alt" data-icon="fa-solid fa-expand-alt">fa-solid fa-expand-alt</option>
                                        <option value="fa-solid fa-up-right-and-down-left-from-center" data-icon="fa-solid fa-up-right-and-down-left-from-center"option>fa-up-right-and-down-left-from-center</span></li>
                                        <option value="fa-solid fa-oil-can" data-icon="fa-solid fa-oil-can">fa-solid fa-oil-can</option>
                                        <option value="fa-solid fa-t" data-icon="fa-solid fa-t">fa-solid fa-t</option>
                                        <option value="fa-solid fa-hippo" data-icon="fa-solid fa-hippo">fa-solid fa-hippo</option>
                                        <option value="fa-solid fa-chart-column" data-icon="fa-solid fa-chart-column">fa-solid fa-chart-column</option>
                                        <option value="fa-solid fa-infinity" data-icon="fa-solid fa-infinity">fa-solid fa-infinity</option>
                                        <option value="fa-solid fa-vial-circle-check" data-icon="fa-solid fa-vial-circle-check">fa-solid fa-vial-circle-check</option>
                                        <option value="fa-solid fa-person-arrow-down-to-line" data-icon="fa-solid fa-person-arrow-down-to-line"option>fa-person-arrow-down-to-line</span></li>
                                        <option value="fa-solid fa-voicemail" data-icon="fa-solid fa-voicemail">fa-solid fa-voicemail</option>
                                        <option value="fa-solid fa-fan" data-icon="fa-solid fa-fan">fa-solid fa-fan</option>
                                        <option value="fa-solid fa-person-walking-luggage" data-icon="fa-solid fa-person-walking-luggage">fa-solid fa-person-walkingoption>span></li>
                                        <option value="fa-solid fa-arrows-alt-v" data-icon="fa-solid fa-arrows-alt-v">fa-solid fa-arrows-alt-v</option>
                                        <option value="fa-solid fa-up-down" data-icon="fa-solid fa-up-down">fa-solid fa-up-down</option>
                                        <option value="fa-solid fa-cloud-moon-rain" data-icon="fa-solid fa-cloud-moon-rain">fa-solid fa-cloud-moon-rain</option>
                                        <option value="fa-solid fa-calendar" data-icon="fa-solid fa-calendar">fa-solid fa-calendar</option>
                                        <option value="fa-solid fa-trailer" data-icon="fa-solid fa-trailer">fa-solid fa-trailer</option>
                                        <option value="fa-solid fa-bahai" data-icon="fa-solid fa-bahai">fa-solid fa-bahai</option>
                                        <option value="fa-solid fa-haykal" data-icon="fa-solid fa-haykal">fa-solid fa-haykal</option>
                                        <option value="fa-solid fa-sd-card" data-icon="fa-solid fa-sd-card">fa-solid fa-sd-card</option>
                                        <option value="fa-solid fa-dragon" data-icon="fa-solid fa-dragon">fa-solid fa-dragon</option>
                                        <option value="fa-solid fa-shoe-prints" data-icon="fa-solid fa-shoe-prints">fa-solid fa-shoe-prints</option>
                                        <option value="fa-solid fa-circle-plus" data-icon="fa-solid fa-circle-plus">fa-solid fa-circle-plus</option>
                                        <option value="fa-solid fa-plus-circle" data-icon="fa-solid fa-plus-circle">fa-solid fa-plus-circle</option>
                                        <option value="fa-solid fa-face-grin-tongue-wink" data-icon="fa-solid fa-face-grin-tongue-wink">fa-solid fa-face-grin-tonoption>span></li>
                                        <option value="fa-solid fa-grin-tongue-wink" data-icon="fa-solid fa-grin-tongue-wink">fa-solid fa-grin-tongue-wink</option>
                                        <option value="fa-solid fa-hand-holding" data-icon="fa-solid fa-hand-holding">fa-solid fa-hand-holding</option>
                                        <option value="fa-solid fa-plug-circle-exclamation" data-icon="fa-solid fa-plug-circle-exclamation"option>fa-plug-circle-exclamation</span></li>
                                        <option value="fa-solid fa-chain-broken" data-icon="fa-solid fa-chain-broken">fa-solid fa-chain-broken</option>
                                        <option value="fa-solid fa-chain-slash" data-icon="fa-solid fa-chain-slash">fa-solid fa-chain-slash</option>
                                        <option value="fa-solid fa-link-slash" data-icon="fa-solid fa-link-slash">fa-solid fa-link-slash</option>
                                        <option value="fa-solid fa-unlink" data-icon="fa-solid fa-unlink">fa-solid fa-unlink</option>
                                        <option value="fa-solid fa-clone" data-icon="fa-solid fa-clone">fa-solid fa-clone</option>
                                        <option value="fa-solid fa-person-walking-arrow-loop-left" data-icon="fa-solid fa-person-walking-arrow-loop-left"option>fa-person-walking-arrow-loop-left</span></li>
                                        <option value="fa-solid fa-arrow-up-z-a" data-icon="fa-solid fa-arrow-up-z-a">fa-solid fa-arrow-up-z-a</option>
                                        <option value="fa-solid fa-sort-alpha-up-alt" data-icon="fa-solid fa-sort-alpha-up-alt">fa-solid fa-sort-alpha-up-alt</option>
                                        <option value="fa-solid fa-fire-alt" data-icon="fa-solid fa-fire-alt">fa-solid fa-fire-alt</option>
                                        <option value="fa-solid fa-fire-flame-curved" data-icon="fa-solid fa-fire-flame-curved">fa-solid fa-fire-flame-curved</option>
                                        <option value="fa-solid fa-tornado" data-icon="fa-solid fa-tornado">fa-solid fa-tornado</option>
                                        <option value="fa-solid fa-file-circle-plus" data-icon="fa-solid fa-file-circle-plus">fa-solid fa-file-circle-plus</option>
                                        <option value="fa-solid fa-book-quran" data-icon="fa-solid fa-book-quran">fa-solid fa-book-quran</option>
                                        <option value="fa-solid fa-quran" data-icon="fa-solid fa-quran">fa-solid fa-quran</option>
                                        <option value="fa-solid fa-anchor" data-icon="fa-solid fa-anchor">fa-solid fa-anchor</option>
                                        <option value="fa-solid fa-border-all" data-icon="fa-solid fa-border-all">fa-solid fa-border-all</option>
                                        <option value="fa-solid fa-angry" data-icon="fa-solid fa-angry">fa-solid fa-angry</option>
                                        <option value="fa-solid fa-face-angry" data-icon="fa-solid fa-face-angry">fa-solid fa-face-angry</option>
                                        <option value="fa-solid fa-cookie-bite" data-icon="fa-solid fa-cookie-bite">fa-solid fa-cookie-bite</option>
                                        <option value="fa-solid fa-arrow-trend-down" data-icon="fa-solid fa-arrow-trend-down">fa-solid fa-arrow-trend-down</option>
                                        <option value="fa-solid fa-feed" data-icon="fa-solid fa-feed">fa-solid fa-feed</option>
                                        <option value="fa-solid fa-rss" data-icon="fa-solid fa-rss">fa-solid fa-rss</option>
                                        <option value="fa-solid fa-draw-polygon" data-icon="fa-solid fa-draw-polygon">fa-solid fa-draw-polygon</option>
                                        <option value="fa-solid fa-balance-scale" data-icon="fa-solid fa-balance-scale">fa-solid fa-balance-scale</option>
                                        <option value="fa-solid fa-scale-balanced" data-icon="fa-solid fa-scale-balanced">fa-solid fa-scale-balanced</option>
                                        <option value="fa-solid fa-gauge-simple-high" data-icon="fa-solid fa-gauge-simple-high">fa-solid fa-gauge-simple-high</option>
                                        <option value="fa-solid fa-tachometer-fast" data-icon="fa-solid fa-tachometer-fast">fa-solid fa-tachometer-fast</option>
                                        <option value="fa-solid fa-tachometer" data-icon="fa-solid fa-tachometer">fa-solid fa-tachometer</option>
                                        <option value="fa-solid fa-shower" data-icon="fa-solid fa-shower">fa-solid fa-shower</option>
                                        <option value="fa-solid fa-desktop-alt" data-icon="fa-solid fa-desktop-alt">fa-solid fa-desktop-alt</option>
                                        <option value="fa-solid fa-desktop" data-icon="fa-solid fa-desktop">fa-solid fa-desktop</option>
                                        <option value="fa-solid fa-m" data-icon="fa-solid fa-m">fa-solid fa-m</option>
                                        <option value="fa-solid fa-table-list" data-icon="fa-solid fa-table-list">fa-solid fa-table-list</option>
                                        <option value="fa-solid fa-th-list" data-icon="fa-solid fa-th-list">fa-solid fa-th-list</option>
                                        <option value="fa-solid fa-comment-sms" data-icon="fa-solid fa-comment-sms">fa-solid fa-comment-sms</option>
                                        <option value="fa-solid fa-sms" data-icon="fa-solid fa-sms">fa-solid fa-sms</option>
                                        <option value="fa-solid fa-book" data-icon="fa-solid fa-book">fa-solid fa-book</option>
                                        <option value="fa-solid fa-user-plus" data-icon="fa-solid fa-user-plus">fa-solid fa-user-plus</option>
                                        <option value="fa-solid fa-check" data-icon="fa-solid fa-check">fa-solid fa-check</option>
                                        <option value="fa-solid fa-battery-4" data-icon="fa-solid fa-battery-4">fa-solid fa-battery-4</option>
                                        <option value="fa-solid fa-battery-three-quarters" data-icon="fa-solid fa-battery-three-quarters">fa-solid fa-battery-three-option>span></li>
                                        <option value="fa-solid fa-house-circle-check" data-icon="fa-solid fa-house-circle-check">fa-solid fa-house-circle-check</option>
                                        <option value="fa-solid fa-angle-left" data-icon="fa-solid fa-angle-left">fa-solid fa-angle-left</option>
                                        <option value="fa-solid fa-diagram-successor" data-icon="fa-solid fa-diagram-successor">fa-solid fa-diagram-successor</option>
                                        <option value="fa-solid fa-truck-arrow-right" data-icon="fa-solid fa-truck-arrow-right">fa-solid fa-truck-arrow-right</option>
                                        <option value="fa-solid fa-arrows-split-up-and-left" data-icon="fa-solid fa-arrows-split-up-and-left"option>fa-arrows-split-up-and-left</span></li>
                                        <option value="fa-solid fa-fist-raised" data-icon="fa-solid fa-fist-raised">fa-solid fa-fist-raised</option>
                                        <option value="fa-solid fa-hand-fist" data-icon="fa-solid fa-hand-fist">fa-solid fa-hand-fist</option>
                                        <option value="fa-solid fa-cloud-moon" data-icon="fa-solid fa-cloud-moon">fa-solid fa-cloud-moon</option>
                                        <option value="fa-solid fa-briefcase" data-icon="fa-solid fa-briefcase">fa-solid fa-briefcase</option>
                                        <option value="fa-solid fa-person-falling" data-icon="fa-solid fa-person-falling">fa-solid fa-person-falling</option>
                                        <option value="fa-solid fa-image-portrait" data-icon="fa-solid fa-image-portrait">fa-solid fa-image-portrait</option>
                                        <option value="fa-solid fa-portrait" data-icon="fa-solid fa-portrait">fa-solid fa-portrait</option>
                                        <option value="fa-solid fa-user-tag" data-icon="fa-solid fa-user-tag">fa-solid fa-user-tag</option>
                                        <option value="fa-solid fa-rug" data-icon="fa-solid fa-rug">fa-solid fa-rug</option>
                                        <option value="fa-solid fa-earth-europe" data-icon="fa-solid fa-earth-europe">fa-solid fa-earth-europe</option>
                                        <option value="fa-solid fa-globe-europe" data-icon="fa-solid fa-globe-europe">fa-solid fa-globe-europe</option>
                                        <option value="fa-solid fa-cart-flatbed-suitcase" data-icon="fa-solid fa-cart-flatbed-suitcase">fa-solid fa-cart-flatbed-option>span></li>
                                        <option value="fa-solid fa-luggage-cart" data-icon="fa-solid fa-luggage-cart">fa-solid fa-luggage-cart</option>
                                        <option value="fa-solid fa-rectangle-times" data-icon="fa-solid fa-rectangle-times">fa-solid fa-rectangle-times</option>
                                        <option value="fa-solid fa-rectangle-xmark" data-icon="fa-solid fa-rectangle-xmark">fa-solid fa-rectangle-xmark</option>
                                        <option value="fa-solid fa-times-rectangle" data-icon="fa-solid fa-times-rectangle">fa-solid fa-times-rectangle</option>
                                        <option value="fa-solid fa-window-close" data-icon="fa-solid fa-window-close">fa-solid fa-window-close</option>
                                        <option value="fa-solid fa-baht-sign" data-icon="fa-solid fa-baht-sign">fa-solid fa-baht-sign</option>
                                        <option value="fa-solid fa-book-open" data-icon="fa-solid fa-book-open">fa-solid fa-book-open</option>
                                        <option value="fa-solid fa-book-journal-whills" data-icon="fa-solid fa-book-journal-whills">fa-solid fa-book-journal-whills</option>
                                        <option value="fa-solid fa-journal-whills" data-icon="fa-solid fa-journal-whills">fa-solid fa-journal-whills</option>
                                        <option value="fa-solid fa-handcuffs" data-icon="fa-solid fa-handcuffs">fa-solid fa-handcuffs</option>
                                        <option value="fa-solid fa-exclamation-triangle" data-icon="fa-solid fa-exclamation-triangle">fa-solid fa-exclamation-triangloption>li>
                                        <option value="fa-solid fa-triangle-exclamation" data-icon="fa-solid fa-triangle-exclamation">fa-solid fa-triangle-exclamatiooption>li>
                                        <option value="fa-solid fa-warning" data-icon="fa-solid fa-warning">fa-solid fa-warning</option>
                                        <option value="fa-solid fa-database" data-icon="fa-solid fa-database">fa-solid fa-database</option>
                                        <option value="fa-solid fa-arrow-turn-right" data-icon="fa-solid fa-arrow-turn-right">fa-solid fa-arrow-turn-right</option>
                                        <option value="fa-solid fa-mail-forward" data-icon="fa-solid fa-mail-forward">fa-solid fa-mail-forward</option>
                                        <option value="fa-solid fa-share" data-icon="fa-solid fa-share">fa-solid fa-share</option>
                                        <option value="fa-solid fa-bottle-droplet" data-icon="fa-solid fa-bottle-droplet">fa-solid fa-bottle-droplet</option>
                                        <option value="fa-solid fa-mask-face" data-icon="fa-solid fa-mask-face">fa-solid fa-mask-face</option>
                                        <option value="fa-solid fa-hill-rockslide" data-icon="fa-solid fa-hill-rockslide">fa-solid fa-hill-rockslide</option>
                                        <option value="fa-solid fa-exchange-alt" data-icon="fa-solid fa-exchange-alt">fa-solid fa-exchange-alt</option>
                                        <option value="fa-solid fa-right-left" data-icon="fa-solid fa-right-left">fa-solid fa-right-left</option>
                                        <option value="fa-solid fa-paper-plane" data-icon="fa-solid fa-paper-plane">fa-solid fa-paper-plane</option>
                                        <option value="fa-solid fa-road-circle-exclamation" data-icon="fa-solid fa-road-circle-exclamation"option>fa-road-circle-exclamation</span></li>
                                        <option value="fa-solid fa-dungeon" data-icon="fa-solid fa-dungeon">fa-solid fa-dungeon</option>
                                        <option value="fa-solid fa-align-right" data-icon="fa-solid fa-align-right">fa-solid fa-align-right</option>
                                        <option value="fa-solid fa-money-bill-1-wave" data-icon="fa-solid fa-money-bill-1-wave">fa-solid fa-money-bill-1-wave</option>
                                        <option value="fa-solid fa-money-bill-wave-alt" data-icon="fa-solid fa-money-bill-wave-alt">fa-solid fa-money-bill-wave-alt</option>
                                        <option value="fa-solid fa-life-ring" data-icon="fa-solid fa-life-ring">fa-solid fa-life-ring</option>
                                        <option value="fa-solid fa-hands" data-icon="fa-solid fa-hands">fa-solid fa-hands</option>
                                        <option value="fa-solid fa-sign-language" data-icon="fa-solid fa-sign-language">fa-solid fa-sign-language</option>
                                        <option value="fa-solid fa-signing" data-icon="fa-solid fa-signing">fa-solid fa-signing</option>
                                        <option value="fa-solid fa-calendar-day" data-icon="fa-solid fa-calendar-day">fa-solid fa-calendar-day</option>
                                        <option value="fa-solid fa-ladder-water" data-icon="fa-solid fa-ladder-water">fa-solid fa-ladder-water</option>
                                        <option value="fa-solid fa-swimming-pool" data-icon="fa-solid fa-swimming-pool">fa-solid fa-swimming-pool</option>
                                        <option value="fa-solid fa-water-ladder" data-icon="fa-solid fa-water-ladder">fa-solid fa-water-ladder</option>
                                        <option value="fa-solid fa-arrows-up-down" data-icon="fa-solid fa-arrows-up-down">fa-solid fa-arrows-up-down</option>
                                        <option value="fa-solid fa-arrows-v" data-icon="fa-solid fa-arrows-v">fa-solid fa-arrows-v</option>
                                        <option value="fa-solid fa-face-grimace" data-icon="fa-solid fa-face-grimace">fa-solid fa-face-grimace</option>
                                        <option value="fa-solid fa-grimace" data-icon="fa-solid fa-grimace">fa-solid fa-grimace</option>
                                        <option value="fa-solid fa-wheelchair-alt" data-icon="fa-solid fa-wheelchair-alt">fa-solid fa-wheelchair-alt</option>
                                        <option value="fa-solid fa-wheelchair-move" data-icon="fa-solid fa-wheelchair-move">fa-solid fa-wheelchair-move</option>
                                        <option value="fa-solid fa-level-down-alt" data-icon="fa-solid fa-level-down-alt">fa-solid fa-level-down-alt</option>
                                        <option value="fa-solid fa-turn-down" data-icon="fa-solid fa-turn-down">fa-solid fa-turn-down</option>
                                        <option value="fa-solid fa-person-walking-arrow-right" data-icon="fa-solid fa-person-walking-arrow-right"option>fa-person-walking-arrow-right</span></li>
                                        <option value="fa-solid fa-envelope-square" data-icon="fa-solid fa-envelope-square">fa-solid fa-envelope-square</option>
                                        <option value="fa-solid fa-square-envelope" data-icon="fa-solid fa-square-envelope">fa-solid fa-square-envelope</option>
                                        <option value="fa-solid fa-dice" data-icon="fa-solid fa-dice">fa-solid fa-dice</option>
                                        <option value="fa-solid fa-bowling-ball" data-icon="fa-solid fa-bowling-ball">fa-solid fa-bowling-ball</option>
                                        <option value="fa-solid fa-brain" data-icon="fa-solid fa-brain">fa-solid fa-brain</option>
                                        <option value="fa-solid fa-band-aid" data-icon="fa-solid fa-band-aid">fa-solid fa-band-aid</option>
                                        <option value="fa-solid fa-bandage" data-icon="fa-solid fa-bandage">fa-solid fa-bandage</option>
                                        <option value="fa-solid fa-calendar-minus" data-icon="fa-solid fa-calendar-minus">fa-solid fa-calendar-minus</option>
                                        <option value="fa-solid fa-circle-xmark" data-icon="fa-solid fa-circle-xmark">fa-solid fa-circle-xmark</option>
                                        <option value="fa-solid fa-times-circle" data-icon="fa-solid fa-times-circle">fa-solid fa-times-circle</option>
                                        <option value="fa-solid fa-xmark-circle" data-icon="fa-solid fa-xmark-circle">fa-solid fa-xmark-circle</option>
                                        <option value="fa-solid fa-gifts" data-icon="fa-solid fa-gifts">fa-solid fa-gifts</option>
                                        <option value="fa-solid fa-hotel" data-icon="fa-solid fa-hotel">fa-solid fa-hotel</option>
                                        <option value="fa-solid fa-earth-asia" data-icon="fa-solid fa-earth-asia">fa-solid fa-earth-asia</option>
                                        <option value="fa-solid fa-globe-asia" data-icon="fa-solid fa-globe-asia">fa-solid fa-globe-asia</option>
                                        <option value="fa-solid fa-id-card-alt" data-icon="fa-solid fa-id-card-alt">fa-solid fa-id-card-alt</option>
                                        <option value="fa-solid fa-id-card-clip" data-icon="fa-solid fa-id-card-clip">fa-solid fa-id-card-clip</option>
                                        <option value="fa-solid fa-magnifying-glass-plus" data-icon="fa-solid fa-magnifying-glass-plus">fa-solid fa-magnifying-gloption>span></li>
                                        <option value="fa-solid fa-search-plus" data-icon="fa-solid fa-search-plus">fa-solid fa-search-plus</option>
                                        <option value="fa-solid fa-thumbs-up" data-icon="fa-solid fa-thumbs-up">fa-solid fa-thumbs-up</option>
                                        <option value="fa-solid fa-user-clock" data-icon="fa-solid fa-user-clock">fa-solid fa-user-clock</option>
                                        <option value="fa-solid fa-allergies" data-icon="fa-solid fa-allergies">fa-solid fa-allergies</option>
                                        <option value="fa-solid fa-hand-dots" data-icon="fa-solid fa-hand-dots">fa-solid fa-hand-dots</option>
                                        <option value="fa-solid fa-file-invoice" data-icon="fa-solid fa-file-invoice">fa-solid fa-file-invoice</option>
                                        <option value="fa-solid fa-window-minimize" data-icon="fa-solid fa-window-minimize">fa-solid fa-window-minimize</option>
                                        <option value="fa-solid fa-coffee" data-icon="fa-solid fa-coffee">fa-solid fa-coffee</option>
                                        <option value="fa-solid fa-mug-saucer" data-icon="fa-solid fa-mug-saucer">fa-solid fa-mug-saucer</option>
                                        <option value="fa-solid fa-brush" data-icon="fa-solid fa-brush">fa-solid fa-brush</option>
                                        <option value="fa-solid fa-mask" data-icon="fa-solid fa-mask">fa-solid fa-mask</option>
                                        <option value="fa-solid fa-magnifying-glass-minus" data-icon="fa-solid fa-magnifying-glass-minus">fa-solid fa-magnifying-glaoption>span></li>
                                        <option value="fa-solid fa-search-minus" data-icon="fa-solid fa-search-minus">fa-solid fa-search-minus</option>
                                        <option value="fa-solid fa-ruler-vertical" data-icon="fa-solid fa-ruler-vertical">fa-solid fa-ruler-vertical</option>
                                        <option value="fa-solid fa-user-alt" data-icon="fa-solid fa-user-alt">fa-solid fa-user-alt</option>
                                        <option value="fa-solid fa-user-large" data-icon="fa-solid fa-user-large">fa-solid fa-user-large</option>
                                        <option value="fa-solid fa-train-tram" data-icon="fa-solid fa-train-tram">fa-solid fa-train-tram</option>
                                        <option value="fa-solid fa-user-nurse" data-icon="fa-solid fa-user-nurse">fa-solid fa-user-nurse</option>
                                        <option value="fa-solid fa-syringe" data-icon="fa-solid fa-syringe">fa-solid fa-syringe</option>
                                        <option value="fa-solid fa-cloud-sun" data-icon="fa-solid fa-cloud-sun">fa-solid fa-cloud-sun</option>
                                        <option value="fa-solid fa-stopwatch-20" data-icon="fa-solid fa-stopwatch-20">fa-solid fa-stopwatch-20</option>
                                        <option value="fa-solid fa-square-full" data-icon="fa-solid fa-square-full">fa-solid fa-square-full</option>
                                        <option value="fa-solid fa-magnet" data-icon="fa-solid fa-magnet">fa-solid fa-magnet</option>
                                        <option value="fa-solid fa-jar" data-icon="fa-solid fa-jar">fa-solid fa-jar</option>
                                        <option value="fa-solid fa-note-sticky" data-icon="fa-solid fa-note-sticky">fa-solid fa-note-sticky</option>
                                        <option value="fa-solid fa-sticky-note" data-icon="fa-solid fa-sticky-note">fa-solid fa-sticky-note</option>
                                        <option value="fa-solid fa-bug-slash" data-icon="fa-solid fa-bug-slash">fa-solid fa-bug-slash</option>
                                        <option value="fa-solid fa-arrow-up-from-water-pump" data-icon="fa-solid fa-arrow-up-from-water-pump"option>fa-arrow-up-from-water-pump</span></li>
                                        <option value="fa-solid fa-bone" data-icon="fa-solid fa-bone">fa-solid fa-bone</option>
                                        <option value="fa-solid fa-user-injured" data-icon="fa-solid fa-user-injured">fa-solid fa-user-injured</option>
                                        <option value="fa-solid fa-face-sad-tear" data-icon="fa-solid fa-face-sad-tear">fa-solid fa-face-sad-tear</option>
                                        <option value="fa-solid fa-sad-tear" data-icon="fa-solid fa-sad-tear">fa-solid fa-sad-tear</option>
                                        <option value="fa-solid fa-plane" data-icon="fa-solid fa-plane">fa-solid fa-plane</option>
                                        <option value="fa-solid fa-tent-arrows-down" data-icon="fa-solid fa-tent-arrows-down">fa-solid fa-tent-arrows-down</option>
                                        <option value="fa-solid fa-exclamation" data-icon="fa-solid fa-exclamation">fa-solid fa-exclamation</option>
                                        <option value="fa-solid fa-arrows-spin" data-icon="fa-solid fa-arrows-spin">fa-solid fa-arrows-spin</option>
                                        <option value="fa-solid fa-print" data-icon="fa-solid fa-print">fa-solid fa-print</option>
                                        <option value="fa-solid fa-try" data-icon="fa-solid fa-try">fa-solid fa-try</option>
                                        <option value="fa-solid fa-turkish-lira-sign" data-icon="fa-solid fa-turkish-lira-sign">fa-solid fa-turkish-lira-sign</option>
                                        <option value="fa-solid fa-turkish-lira" data-icon="fa-solid fa-turkish-lira">fa-solid fa-turkish-lira</option>
                                        <option value="fa-solid fa-dollar-sign" data-icon="fa-solid fa-dollar-sign">fa-solid fa-dollar-sign</option>
                                        <option value="fa-solid fa-dollar" data-icon="fa-solid fa-dollar">fa-solid fa-dollar</option>
                                        <option value="fa-solid fa-usd" data-icon="fa-solid fa-usd">fa-solid fa-usd</option>
                                        <option value="fa-solid fa-x" data-icon="fa-solid fa-x">fa-solid fa-x</option>
                                        <option value="fa-solid fa-magnifying-glass-dollar" data-icon="fa-solid fa-magnifying-glass-dollar"option>fa-magnifying-glass-dollar</span></li>
                                        <option value="fa-solid fa-search-dollar" data-icon="fa-solid fa-search-dollar">fa-solid fa-search-dollar</option>
                                        <option value="fa-solid fa-users-cog" data-icon="fa-solid fa-users-cog">fa-solid fa-users-cog</option>
                                        <option value="fa-solid fa-users-gear" data-icon="fa-solid fa-users-gear">fa-solid fa-users-gear</option>
                                        <option value="fa-solid fa-person-military-pointing" data-icon="fa-solid fa-person-military-pointing"option>fa-person-military-pointing</span></li>
                                        <option value="fa-solid fa-bank" data-icon="fa-solid fa-bank">fa-solid fa-bank</option>
                                        <option value="fa-solid fa-building-columns" data-icon="fa-solid fa-building-columns">fa-solid fa-building-columns</option>
                                        <option value="fa-solid fa-institution" data-icon="fa-solid fa-institution">fa-solid fa-institution</option>
                                        <option value="fa-solid fa-museum" data-icon="fa-solid fa-museum">fa-solid fa-museum</option>
                                        <option value="fa-solid fa-university" data-icon="fa-solid fa-university">fa-solid fa-university</option>
                                        <option value="fa-solid fa-umbrella" data-icon="fa-solid fa-umbrella">fa-solid fa-umbrella</option>
                                        <option value="fa-solid fa-trowel" data-icon="fa-solid fa-trowel">fa-solid fa-trowel</option>
                                        <option value="fa-solid fa-d" data-icon="fa-solid fa-d">fa-solid fa-d</option>
                                        <option value="fa-solid fa-stapler" data-icon="fa-solid fa-stapler">fa-solid fa-stapler</option>
                                        <option value="fa-solid fa-masks-theater" data-icon="fa-solid fa-masks-theater">fa-solid fa-masks-theater</option>
                                        <option value="fa-solid fa-theater-masks" data-icon="fa-solid fa-theater-masks">fa-solid fa-theater-masks</option>
                                        <option value="fa-solid fa-kip-sign" data-icon="fa-solid fa-kip-sign">fa-solid fa-kip-sign</option>
                                        <option value="fa-solid fa-hand-point-left" data-icon="fa-solid fa-hand-point-left">fa-solid fa-hand-point-left</option>
                                        <option value="fa-solid fa-handshake-alt" data-icon="fa-solid fa-handshake-alt">fa-solid fa-handshake-alt</option>
                                        <option value="fa-solid fa-handshake-simple" data-icon="fa-solid fa-handshake-simple">fa-solid fa-handshake-simple</option>
                                        <option value="fa-solid fa-fighter-jet" data-icon="fa-solid fa-fighter-jet">fa-solid fa-fighter-jet</option>
                                        <option value="fa-solid fa-jet-fighter" data-icon="fa-solid fa-jet-fighter">fa-solid fa-jet-fighter</option>
                                        <option value="fa-solid fa-share-alt-square" data-icon="fa-solid fa-share-alt-square">fa-solid fa-share-alt-square</option>
                                        <option value="fa-solid fa-square-share-nodes" data-icon="fa-solid fa-square-share-nodes">fa-solid fa-square-share-nodes</option>
                                        <option value="fa-solid fa-barcode" data-icon="fa-solid fa-barcode">fa-solid fa-barcode</option>
                                        <option value="fa-solid fa-plus-minus" data-icon="fa-solid fa-plus-minus">fa-solid fa-plus-minus</option>
                                        <option value="fa-solid fa-video-camera" data-icon="fa-solid fa-video-camera">fa-solid fa-video-camera</option>
                                        <option value="fa-solid fa-video" data-icon="fa-solid fa-video">fa-solid fa-video</option>
                                        <option value="fa-solid fa-graduation-cap" data-icon="fa-solid fa-graduation-cap">fa-solid fa-graduation-cap</option>
                                        <option value="fa-solid fa-mortar-board" data-icon="fa-solid fa-mortar-board">fa-solid fa-mortar-board</option>
                                        <option value="fa-solid fa-hand-holding-medical" data-icon="fa-solid fa-hand-holding-medical">fa-solid fa-hand-holding-medicaoption>li>
                                        <option value="fa-solid fa-person-circle-check" data-icon="fa-solid fa-person-circle-check">fa-solid fa-person-circle-check</option>
                                        <option value="fa-solid fa-level-up-alt" data-icon="fa-solid fa-level-up-alt">fa-solid fa-level-up-alt</option>
                                        <option value="fa-solid fa-turn-up" data-icon="fa-solid fa-turn-up">fa-solid fa-turn-up</option>
                                        <option value="fa-brands fa-monero" data-icon="fa-brands fa-monero">fa-brands fa-monero</option>
                                        <option value="fa-brands fa-hooli" data-icon="fa-brands fa-hooli">fa-brands fa-hooli</option>
                                        <option value="fa-brands fa-yelp" data-icon="fa-brands fa-yelp">fa-brands fa-yelp</option>
                                        <option value="fa-brands fa-cc-visa" data-icon="fa-brands fa-cc-visa">fa-brands fa-cc-visa</option>
                                        <option value="fa-brands fa-lastfm" data-icon="fa-brands fa-lastfm">fa-brands fa-lastfm</option>
                                        <option value="fa-brands fa-shopware" data-icon="fa-brands fa-shopware">fa-brands fa-shopware</option>
                                        <option value="fa-brands fa-creative-commons-nc" data-icon="fa-brands fa-creative-commons-nc">fa-brands fa-creative-commons-noption>li>
                                        <option value="fa-brands fa-aws" data-icon="fa-brands fa-aws">fa-brands fa-aws</option>
                                        <option value="fa-brands fa-redhat" data-icon="fa-brands fa-redhat">fa-brands fa-redhat</option>
                                        <option value="fa-brands fa-yoast" data-icon="fa-brands fa-yoast">fa-brands fa-yoast</option>
                                        <option value="fa-brands fa-cloudflare" data-icon="fa-brands fa-cloudflare">fa-brands fa-cloudflare</option>
                                        <option value="fa-brands fa-ups" data-icon="fa-brands fa-ups">fa-brands fa-ups</option>
                                        <option value="fa-brands fa-wpexplorer" data-icon="fa-brands fa-wpexplorer">fa-brands fa-wpexplorer</option>
                                        <option value="fa-brands fa-dyalog" data-icon="fa-brands fa-dyalog">fa-brands fa-dyalog</option>
                                        <option value="fa-brands fa-bity" data-icon="fa-brands fa-bity">fa-brands fa-bity</option>
                                        <option value="fa-brands fa-stackpath" data-icon="fa-brands fa-stackpath">fa-brands fa-stackpath</option>
                                        <option value="fa-brands fa-buysellads" data-icon="fa-brands fa-buysellads">fa-brands fa-buysellads</option>
                                        <option value="fa-brands fa-first-order" data-icon="fa-brands fa-first-order">fa-brands fa-first-order</option>
                                        <option value="fa-brands fa-modx" data-icon="fa-brands fa-modx">fa-brands fa-modx</option>
                                        <option value="fa-brands fa-guilded" data-icon="fa-brands fa-guilded">fa-brands fa-guilded</option>
                                        <option value="fa-brands fa-vnv" data-icon="fa-brands fa-vnv">fa-brands fa-vnv</option>
                                        <option value="fa-brands fa-js-square" data-icon="fa-brands fa-js-square">fa-brands fa-js-square</option>
                                        <option value="fa-brands fa-square-js" data-icon="fa-brands fa-square-js">fa-brands fa-square-js</option>
                                        <option value="fa-brands fa-microsoft" data-icon="fa-brands fa-microsoft">fa-brands fa-microsoft</option>
                                        <option value="fa-brands fa-qq" data-icon="fa-brands fa-qq">fa-brands fa-qq</option>
                                        <option value="fa-brands fa-orcid" data-icon="fa-brands fa-orcid">fa-brands fa-orcid</option>
                                        <option value="fa-brands fa-java" data-icon="fa-brands fa-java">fa-brands fa-java</option>
                                        <option value="fa-brands fa-invision" data-icon="fa-brands fa-invision">fa-brands fa-invision</option>
                                        <option value="fa-brands fa-creative-commons-pd-alt" data-icon="fa-brands fa-creative-commons-pd-alt">option>fa-creative-commons-pd-alt</span></li>
                                        <option value="fa-brands fa-centercode" data-icon="fa-brands fa-centercode">fa-brands fa-centercode</option>
                                        <option value="fa-brands fa-glide-g" data-icon="fa-brands fa-glide-g">fa-brands fa-glide-g</option>
                                        <option value="fa-brands fa-drupal" data-icon="fa-brands fa-drupal">fa-brands fa-drupal</option>
                                        <option value="fa-brands fa-hire-a-helper" data-icon="fa-brands fa-hire-a-helper">fa-brands fa-hire-a-helper</option>
                                        <option value="fa-brands fa-creative-commons-by" data-icon="fa-brands fa-creative-commons-by">fa-brands fa-creative-commons-boption>li>
                                        <option value="fa-brands fa-unity" data-icon="fa-brands fa-unity">fa-brands fa-unity</option>
                                        <option value="fa-brands fa-whmcs" data-icon="fa-brands fa-whmcs">fa-brands fa-whmcs</option>
                                        <option value="fa-brands fa-rocketchat" data-icon="fa-brands fa-rocketchat">fa-brands fa-rocketchat</option>
                                        <option value="fa-brands fa-vk" data-icon="fa-brands fa-vk">fa-brands fa-vk</option>
                                        <option value="fa-brands fa-untappd" data-icon="fa-brands fa-untappd">fa-brands fa-untappd</option>
                                        <option value="fa-brands fa-mailchimp" data-icon="fa-brands fa-mailchimp">fa-brands fa-mailchimp</option>
                                        <option value="fa-brands fa-css3-alt" data-icon="fa-brands fa-css3-alt">fa-brands fa-css3-alt</option>
                                        <option value="fa-brands fa-reddit-square" data-icon="fa-brands fa-reddit-square">fa-brands fa-reddit-square</option>
                                        <option value="fa-brands fa-square-reddit" data-icon="fa-brands fa-square-reddit">fa-brands fa-square-reddit</option>
                                        <option value="fa-brands fa-vimeo-v" data-icon="fa-brands fa-vimeo-v">fa-brands fa-vimeo-v</option>
                                        <option value="fa-brands fa-contao" data-icon="fa-brands fa-contao">fa-brands fa-contao</option>
                                        <option value="fa-brands fa-square-font-awesome" data-icon="fa-brands fa-square-font-awesome">fa-brands fa-square-font-awesomoption>li>
                                        <option value="fa-brands fa-deskpro" data-icon="fa-brands fa-deskpro">fa-brands fa-deskpro</option>
                                        <option value="fa-brands fa-sistrix" data-icon="fa-brands fa-sistrix">fa-brands fa-sistrix</option>
                                        <option value="fa-brands fa-instagram-square" data-icon="fa-brands fa-instagram-square">fa-brands fa-instagram-square</option>
                                        <option value="fa-brands fa-square-instagram" data-icon="fa-brands fa-square-instagram">fa-brands fa-square-instagram</option>
                                        <option value="fa-brands fa-battle-net" data-icon="fa-brands fa-battle-net">fa-brands fa-battle-net</option>
                                        <option value="fa-brands fa-the-red-yeti" data-icon="fa-brands fa-the-red-yeti">fa-brands fa-the-red-yeti</option>
                                        <option value="fa-brands fa-hacker-news-square" data-icon="fa-brands fa-hacker-news-square">fa-brands fa-hacker-news-square</option>
                                        <option value="fa-brands fa-square-hacker-news" data-icon="fa-brands fa-square-hacker-news">fa-brands fa-square-hacker-news</option>
                                        <option value="fa-brands fa-edge" data-icon="fa-brands fa-edge">fa-brands fa-edge</option>
                                        <option value="fa-brands fa-threads" data-icon="fa-brands fa-threads">fa-brands fa-threads</option>
                                        <option value="fa-brands fa-napster" data-icon="fa-brands fa-napster">fa-brands fa-napster</option>
                                        <option value="fa-brands fa-snapchat-square" data-icon="fa-brands fa-snapchat-square">fa-brands fa-snapchat-square</option>
                                        <option value="fa-brands fa-square-snapchat" data-icon="fa-brands fa-square-snapchat">fa-brands fa-square-snapchat</option>
                                        <option value="fa-brands fa-google-plus-g" data-icon="fa-brands fa-google-plus-g">fa-brands fa-google-plus-g</option>
                                        <option value="fa-brands fa-artstation" data-icon="fa-brands fa-artstation">fa-brands fa-artstation</option>
                                        <option value="fa-brands fa-markdown" data-icon="fa-brands fa-markdown">fa-brands fa-markdown</option>
                                        <option value="fa-brands fa-sourcetree" data-icon="fa-brands fa-sourcetree">fa-brands fa-sourcetree</option>
                                        <option value="fa-brands fa-google-plus" data-icon="fa-brands fa-google-plus">fa-brands fa-google-plus</option>
                                        <option value="fa-brands fa-diaspora" data-icon="fa-brands fa-diaspora">fa-brands fa-diaspora</option>
                                        <option value="fa-brands fa-foursquare" data-icon="fa-brands fa-foursquare">fa-brands fa-foursquare</option>
                                        <option value="fa-brands fa-stack-overflow" data-icon="fa-brands fa-stack-overflow">fa-brands fa-stack-overflow</option>
                                        <option value="fa-brands fa-github-alt" data-icon="fa-brands fa-github-alt">fa-brands fa-github-alt</option>
                                        <option value="fa-brands fa-phoenix-squadron" data-icon="fa-brands fa-phoenix-squadron">fa-brands fa-phoenix-squadron</option>
                                        <option value="fa-brands fa-pagelines" data-icon="fa-brands fa-pagelines">fa-brands fa-pagelines</option>
                                        <option value="fa-brands fa-algolia" data-icon="fa-brands fa-algolia">fa-brands fa-algolia</option>
                                        <option value="fa-brands fa-red-river" data-icon="fa-brands fa-red-river">fa-brands fa-red-river</option>
                                        <option value="fa-brands fa-creative-commons-sa" data-icon="fa-brands fa-creative-commons-sa">fa-brands fa-creative-commons-soption>li>
                                        <option value="fa-brands fa-safari" data-icon="fa-brands fa-safari">fa-brands fa-safari</option>
                                        <option value="fa-brands fa-google" data-icon="fa-brands fa-google">fa-brands fa-google</option>
                                        <option value="fa-brands fa-font-awesome-alt" data-icon="fa-brands fa-font-awesome-alt">fa-brands fa-font-awesome-alt</option>
                                        <option value="fa-brands fa-square-font-awesome-stroke" data-icon="fa-brands fa-square-font-awesome-stroke">option>fa-square-font-awesome-stroke</span></li>
                                        <option value="fa-brands fa-atlassian" data-icon="fa-brands fa-atlassian">fa-brands fa-atlassian</option>
                                        <option value="fa-brands fa-linkedin-in" data-icon="fa-brands fa-linkedin-in">fa-brands fa-linkedin-in</option>
                                        <option value="fa-brands fa-digital-ocean" data-icon="fa-brands fa-digital-ocean">fa-brands fa-digital-ocean</option>
                                        <option value="fa-brands fa-nimblr" data-icon="fa-brands fa-nimblr">fa-brands fa-nimblr</option>
                                        <option value="fa-brands fa-chromecast" data-icon="fa-brands fa-chromecast">fa-brands fa-chromecast</option>
                                        <option value="fa-brands fa-evernote" data-icon="fa-brands fa-evernote">fa-brands fa-evernote</option>
                                        <option value="fa-brands fa-hacker-news" data-icon="fa-brands fa-hacker-news">fa-brands fa-hacker-news</option>
                                        <option value="fa-brands fa-creative-commons-sampling" data-icon="fa-brands fa-creative-commons-sampling">option>fa-creative-commons-sampling</span></li>
                                        <option value="fa-brands fa-adversal" data-icon="fa-brands fa-adversal">fa-brands fa-adversal</option>
                                        <option value="fa-brands fa-creative-commons" data-icon="fa-brands fa-creative-commons">fa-brands fa-creative-commons</option>
                                        <option value="fa-brands fa-watchman-monitoring" data-icon="fa-brands fa-watchman-monitoring">fa-brands fa-watchman-monitorinoption>li>
                                        <option value="fa-brands fa-fonticons" data-icon="fa-brands fa-fonticons">fa-brands fa-fonticons</option>
                                        <option value="fa-brands fa-weixin" data-icon="fa-brands fa-weixin">fa-brands fa-weixin</option>
                                        <option value="fa-brands fa-shirtsinbulk" data-icon="fa-brands fa-shirtsinbulk">fa-brands fa-shirtsinbulk</option>
                                        <option value="fa-brands fa-codepen" data-icon="fa-brands fa-codepen">fa-brands fa-codepen</option>
                                        <option value="fa-brands fa-git-alt" data-icon="fa-brands fa-git-alt">fa-brands fa-git-alt</option>
                                        <option value="fa-brands fa-lyft" data-icon="fa-brands fa-lyft">fa-brands fa-lyft</option>
                                        <option value="fa-brands fa-rev" data-icon="fa-brands fa-rev">fa-brands fa-rev</option>
                                        <option value="fa-brands fa-windows" data-icon="fa-brands fa-windows">fa-brands fa-windows</option>
                                        <option value="fa-brands fa-wizards-of-the-coast" data-icon="fa-brands fa-wizards-of-the-coast">fa-brands fa-wizards-of-toption>span></li>
                                        <option value="fa-brands fa-square-viadeo" data-icon="fa-brands fa-square-viadeo">fa-brands fa-square-viadeo</option>
                                        <option value="fa-brands fa-viadeo-square" data-icon="fa-brands fa-viadeo-square">fa-brands fa-viadeo-square</option>
                                        <option value="fa-brands fa-meetup" data-icon="fa-brands fa-meetup">fa-brands fa-meetup</option>
                                        <option value="fa-brands fa-centos" data-icon="fa-brands fa-centos">fa-brands fa-centos</option>
                                        <option value="fa-brands fa-adn" data-icon="fa-brands fa-adn">fa-brands fa-adn</option>
                                        <option value="fa-brands fa-cloudsmith" data-icon="fa-brands fa-cloudsmith">fa-brands fa-cloudsmith</option>
                                        <option value="fa-brands fa-pied-piper-alt" data-icon="fa-brands fa-pied-piper-alt">fa-brands fa-pied-piper-alt</option>
                                        <option value="fa-brands fa-dribbble-square" data-icon="fa-brands fa-dribbble-square">fa-brands fa-dribbble-square</option>
                                        <option value="fa-brands fa-square-dribbble" data-icon="fa-brands fa-square-dribbble">fa-brands fa-square-dribbble</option>
                                        <option value="fa-brands fa-codiepie" data-icon="fa-brands fa-codiepie">fa-brands fa-codiepie</option>
                                        <option value="fa-brands fa-node" data-icon="fa-brands fa-node">fa-brands fa-node</option>
                                        <option value="fa-brands fa-mix" data-icon="fa-brands fa-mix">fa-brands fa-mix</option>
                                        <option value="fa-brands fa-steam" data-icon="fa-brands fa-steam">fa-brands fa-steam</option>
                                        <option value="fa-brands fa-cc-apple-pay" data-icon="fa-brands fa-cc-apple-pay">fa-brands fa-cc-apple-pay</option>
                                        <option value="fa-brands fa-scribd" data-icon="fa-brands fa-scribd">fa-brands fa-scribd</option>
                                        <option value="fa-brands fa-debian" data-icon="fa-brands fa-debian">fa-brands fa-debian</option>
                                        <option value="fa-brands fa-openid" data-icon="fa-brands fa-openid">fa-brands fa-openid</option>
                                        <option value="fa-brands fa-instalod" data-icon="fa-brands fa-instalod">fa-brands fa-instalod</option>
                                        <option value="fa-brands fa-expeditedssl" data-icon="fa-brands fa-expeditedssl">fa-brands fa-expeditedssl</option>
                                        <option value="fa-brands fa-sellcast" data-icon="fa-brands fa-sellcast">fa-brands fa-sellcast</option>
                                        <option value="fa-brands fa-square-twitter" data-icon="fa-brands fa-square-twitter">fa-brands fa-square-twitter</option>
                                        <option value="fa-brands fa-twitter-square" data-icon="fa-brands fa-twitter-square">fa-brands fa-twitter-square</option>
                                        <option value="fa-brands fa-r-project" data-icon="fa-brands fa-r-project">fa-brands fa-r-project</option>
                                        <option value="fa-brands fa-delicious" data-icon="fa-brands fa-delicious">fa-brands fa-delicious</option>
                                        <option value="fa-brands fa-freebsd" data-icon="fa-brands fa-freebsd">fa-brands fa-freebsd</option>
                                        <option value="fa-brands fa-vuejs" data-icon="fa-brands fa-vuejs">fa-brands fa-vuejs</option>
                                        <option value="fa-brands fa-accusoft" data-icon="fa-brands fa-accusoft">fa-brands fa-accusoft</option>
                                        <option value="fa-brands fa-ioxhost" data-icon="fa-brands fa-ioxhost">fa-brands fa-ioxhost</option>
                                        <option value="fa-brands fa-fonticons-fi" data-icon="fa-brands fa-fonticons-fi">fa-brands fa-fonticons-fi</option>
                                        <option value="fa-brands fa-app-store" data-icon="fa-brands fa-app-store">fa-brands fa-app-store</option>
                                        <option value="fa-brands fa-cc-mastercard" data-icon="fa-brands fa-cc-mastercard">fa-brands fa-cc-mastercard</option>
                                        <option value="fa-brands fa-itunes-note" data-icon="fa-brands fa-itunes-note">fa-brands fa-itunes-note</option>
                                        <option value="fa-brands fa-golang" data-icon="fa-brands fa-golang">fa-brands fa-golang</option>
                                        <option value="fa-brands fa-kickstarter" data-icon="fa-brands fa-kickstarter">fa-brands fa-kickstarter</option>
                                        <option value="fa-brands fa-grav" data-icon="fa-brands fa-grav">fa-brands fa-grav</option>
                                        <option value="fa-brands fa-weibo" data-icon="fa-brands fa-weibo">fa-brands fa-weibo</option>
                                        <option value="fa-brands fa-uncharted" data-icon="fa-brands fa-uncharted">fa-brands fa-uncharted</option>
                                        <option value="fa-brands fa-firstdraft" data-icon="fa-brands fa-firstdraft">fa-brands fa-firstdraft</option>
                                        <option value="fa-brands fa-square-youtube" data-icon="fa-brands fa-square-youtube">fa-brands fa-square-youtube</option>
                                        <option value="fa-brands fa-youtube-square" data-icon="fa-brands fa-youtube-square">fa-brands fa-youtube-square</option>
                                        <option value="fa-brands fa-wikipedia-w" data-icon="fa-brands fa-wikipedia-w">fa-brands fa-wikipedia-w</option>
                                        <option value="fa-brands fa-rendact" data-icon="fa-brands fa-rendact">fa-brands fa-rendact</option>
                                        <option value="fa-brands fa-wpressr" data-icon="fa-brands fa-wpressr">fa-brands fa-wpressr</option>
                                        <option value="fa-brands fa-angellist" data-icon="fa-brands fa-angellist">fa-brands fa-angellist</option>
                                        <option value="fa-brands fa-galactic-republic" data-icon="fa-brands fa-galactic-republic">fa-brands fa-galactic-republic</option>
                                        <option value="fa-brands fa-nfc-directional" data-icon="fa-brands fa-nfc-directional">fa-brands fa-nfc-directional</option>
                                        <option value="fa-brands fa-skype" data-icon="fa-brands fa-skype">fa-brands fa-skype</option>
                                        <option value="fa-brands fa-joget" data-icon="fa-brands fa-joget">fa-brands fa-joget</option>
                                        <option value="fa-brands fa-fedora" data-icon="fa-brands fa-fedora">fa-brands fa-fedora</option>
                                        <option value="fa-brands fa-stripe-s" data-icon="fa-brands fa-stripe-s">fa-brands fa-stripe-s</option>
                                        <option value="fa-brands fa-meta" data-icon="fa-brands fa-meta">fa-brands fa-meta</option>
                                        <option value="fa-brands fa-laravel" data-icon="fa-brands fa-laravel">fa-brands fa-laravel</option>
                                        <option value="fa-brands fa-hotjar" data-icon="fa-brands fa-hotjar">fa-brands fa-hotjar</option>
                                        <option value="fa-brands fa-bluetooth-b" data-icon="fa-brands fa-bluetooth-b">fa-brands fa-bluetooth-b</option>
                                        <option value="fa-brands fa-sticker-mule" data-icon="fa-brands fa-sticker-mule">fa-brands fa-sticker-mule</option>
                                        <option value="fa-brands fa-creative-commons-zero" data-icon="fa-brands fa-creative-commons-zero">fa-brands fa-creative-commoption>span></li>
                                        <option value="fa-brands fa-hips" data-icon="fa-brands fa-hips">fa-brands fa-hips</option>
                                        <option value="fa-brands fa-behance" data-icon="fa-brands fa-behance">fa-brands fa-behance</option>
                                        <option value="fa-brands fa-reddit" data-icon="fa-brands fa-reddit">fa-brands fa-reddit</option>
                                        <option value="fa-brands fa-discord" data-icon="fa-brands fa-discord">fa-brands fa-discord</option>
                                        <option value="fa-brands fa-chrome" data-icon="fa-brands fa-chrome">fa-brands fa-chrome</option>
                                        <option value="fa-brands fa-app-store-ios" data-icon="fa-brands fa-app-store-ios">fa-brands fa-app-store-ios</option>
                                        <option value="fa-brands fa-cc-discover" data-icon="fa-brands fa-cc-discover">fa-brands fa-cc-discover</option>
                                        <option value="fa-brands fa-wpbeginner" data-icon="fa-brands fa-wpbeginner">fa-brands fa-wpbeginner</option>
                                        <option value="fa-brands fa-confluence" data-icon="fa-brands fa-confluence">fa-brands fa-confluence</option>
                                        <option value="fa-brands fa-mdb" data-icon="fa-brands fa-mdb">fa-brands fa-mdb</option>
                                        <option value="fa-brands fa-dochub" data-icon="fa-brands fa-dochub">fa-brands fa-dochub</option>
                                        <option value="fa-brands fa-accessible-icon" data-icon="fa-brands fa-accessible-icon">fa-brands fa-accessible-icon</option>
                                        <option value="fa-brands fa-ebay" data-icon="fa-brands fa-ebay">fa-brands fa-ebay</option>
                                        <option value="fa-brands fa-amazon" data-icon="fa-brands fa-amazon">fa-brands fa-amazon</option>
                                        <option value="fa-brands fa-unsplash" data-icon="fa-brands fa-unsplash">fa-brands fa-unsplash</option>
                                        <option value="fa-brands fa-yarn" data-icon="fa-brands fa-yarn">fa-brands fa-yarn</option>
                                        <option value="fa-brands fa-square-steam" data-icon="fa-brands fa-square-steam">fa-brands fa-square-steam</option>
                                        <option value="fa-brands fa-steam-square" data-icon="fa-brands fa-steam-square">fa-brands fa-steam-square</option>
                                        <option value="fa-brands fa-500px" data-icon="fa-brands fa-500px">fa-brands fa-500px</option>
                                        <option value="fa-brands fa-square-vimeo" data-icon="fa-brands fa-square-vimeo">fa-brands fa-square-vimeo</option>
                                        <option value="fa-brands fa-vimeo-square" data-icon="fa-brands fa-vimeo-square">fa-brands fa-vimeo-square</option>
                                        <option value="fa-brands fa-asymmetrik" data-icon="fa-brands fa-asymmetrik">fa-brands fa-asymmetrik</option>
                                        <option value="fa-brands fa-font-awesome-flag" data-icon="fa-brands fa-font-awesome-flag">fa-brands fa-font-awesome-flag</option>
                                        <option value="fa-brands fa-font-awesome-logo-full" data-icon="fa-brands fa-font-awesome-logo-full">option>fa-font-awesome-logo-full</span></li>
                                        <option value="fa-brands fa-font-awesome" data-icon="fa-brands fa-font-awesome">fa-brands fa-font-awesome</option>
                                        <option value="fa-brands fa-gratipay" data-icon="fa-brands fa-gratipay">fa-brands fa-gratipay</option>
                                        <option value="fa-brands fa-apple" data-icon="fa-brands fa-apple">fa-brands fa-apple</option>
                                        <option value="fa-brands fa-hive" data-icon="fa-brands fa-hive">fa-brands fa-hive</option>
                                        <option value="fa-brands fa-gitkraken" data-icon="fa-brands fa-gitkraken">fa-brands fa-gitkraken</option>
                                        <option value="fa-brands fa-keybase" data-icon="fa-brands fa-keybase">fa-brands fa-keybase</option>
                                        <option value="fa-brands fa-apple-pay" data-icon="fa-brands fa-apple-pay">fa-brands fa-apple-pay</option>
                                        <option value="fa-brands fa-padlet" data-icon="fa-brands fa-padlet">fa-brands fa-padlet</option>
                                        <option value="fa-brands fa-amazon-pay" data-icon="fa-brands fa-amazon-pay">fa-brands fa-amazon-pay</option>
                                        <option value="fa-brands fa-github-square" data-icon="fa-brands fa-github-square">fa-brands fa-github-square</option>
                                        <option value="fa-brands fa-square-github" data-icon="fa-brands fa-square-github">fa-brands fa-square-github</option>
                                        <option value="fa-brands fa-stumbleupon" data-icon="fa-brands fa-stumbleupon">fa-brands fa-stumbleupon</option>
                                        <option value="fa-brands fa-fedex" data-icon="fa-brands fa-fedex">fa-brands fa-fedex</option>
                                        <option value="fa-brands fa-phoenix-framework" data-icon="fa-brands fa-phoenix-framework">fa-brands fa-phoenix-framework</option>
                                        <option value="fa-brands fa-shopify" data-icon="fa-brands fa-shopify">fa-brands fa-shopify</option>
                                        <option value="fa-brands fa-neos" data-icon="fa-brands fa-neos">fa-brands fa-neos</option>
                                        <option value="fa-brands fa-square-threads" data-icon="fa-brands fa-square-threads">fa-brands fa-square-threads</option>
                                        <option value="fa-brands fa-hackerrank" data-icon="fa-brands fa-hackerrank">fa-brands fa-hackerrank</option>
                                        <option value="fa-brands fa-researchgate" data-icon="fa-brands fa-researchgate">fa-brands fa-researchgate</option>
                                        <option value="fa-brands fa-swift" data-icon="fa-brands fa-swift">fa-brands fa-swift</option>
                                        <option value="fa-brands fa-angular" data-icon="fa-brands fa-angular">fa-brands fa-angular</option>
                                        <option value="fa-brands fa-speakap" data-icon="fa-brands fa-speakap">fa-brands fa-speakap</option>
                                        <option value="fa-brands fa-angrycreative" data-icon="fa-brands fa-angrycreative">fa-brands fa-angrycreative</option>
                                        <option value="fa-brands fa-y-combinator" data-icon="fa-brands fa-y-combinator">fa-brands fa-y-combinator</option>
                                        <option value="fa-brands fa-empire" data-icon="fa-brands fa-empire">fa-brands fa-empire</option>
                                        <option value="fa-brands fa-envira" data-icon="fa-brands fa-envira">fa-brands fa-envira</option>
                                        <option value="fa-brands fa-gitlab-square" data-icon="fa-brands fa-gitlab-square">fa-brands fa-gitlab-square</option>
                                        <option value="fa-brands fa-square-gitlab" data-icon="fa-brands fa-square-gitlab">fa-brands fa-square-gitlab</option>
                                        <option value="fa-brands fa-studiovinari" data-icon="fa-brands fa-studiovinari">fa-brands fa-studiovinari</option>
                                        <option value="fa-brands fa-pied-piper" data-icon="fa-brands fa-pied-piper">fa-brands fa-pied-piper</option>
                                        <option value="fa-brands fa-wordpress" data-icon="fa-brands fa-wordpress">fa-brands fa-wordpress</option>
                                        <option value="fa-brands fa-product-hunt" data-icon="fa-brands fa-product-hunt">fa-brands fa-product-hunt</option>
                                        <option value="fa-brands fa-firefox" data-icon="fa-brands fa-firefox">fa-brands fa-firefox</option>
                                        <option value="fa-brands fa-linode" data-icon="fa-brands fa-linode">fa-brands fa-linode</option>
                                        <option value="fa-brands fa-goodreads" data-icon="fa-brands fa-goodreads">fa-brands fa-goodreads</option>
                                        <option value="fa-brands fa-odnoklassniki-square" data-icon="fa-brands fa-odnoklassniki-square">fa-brands fa-odnoklassnikoption>span></li>
                                        <option value="fa-brands fa-square-odnoklassniki" data-icon="fa-brands fa-square-odnoklassniki">fa-brands fa-square-odnokoption>span></li>
                                        <option value="fa-brands fa-jsfiddle" data-icon="fa-brands fa-jsfiddle">fa-brands fa-jsfiddle</option>
                                        <option value="fa-brands fa-sith" data-icon="fa-brands fa-sith">fa-brands fa-sith</option>
                                        <option value="fa-brands fa-themeisle" data-icon="fa-brands fa-themeisle">fa-brands fa-themeisle</option>
                                        <option value="fa-brands fa-page4" data-icon="fa-brands fa-page4">fa-brands fa-page4</option>
                                        <option value="fa-brands fa-hashnode" data-icon="fa-brands fa-hashnode">fa-brands fa-hashnode</option>
                                        <option value="fa-brands fa-react" data-icon="fa-brands fa-react">fa-brands fa-react</option>
                                        <option value="fa-brands fa-cc-paypal" data-icon="fa-brands fa-cc-paypal">fa-brands fa-cc-paypal</option>
                                        <option value="fa-brands fa-squarespace" data-icon="fa-brands fa-squarespace">fa-brands fa-squarespace</option>
                                        <option value="fa-brands fa-cc-stripe" data-icon="fa-brands fa-cc-stripe">fa-brands fa-cc-stripe</option>
                                        <option value="fa-brands fa-creative-commons-share" data-icon="fa-brands fa-creative-commons-share">option>fa-creative-commons-share</span></li>
                                        <option value="fa-brands fa-bitcoin" data-icon="fa-brands fa-bitcoin">fa-brands fa-bitcoin</option>
                                        <option value="fa-brands fa-keycdn" data-icon="fa-brands fa-keycdn">fa-brands fa-keycdn</option>
                                        <option value="fa-brands fa-opera" data-icon="fa-brands fa-opera">fa-brands fa-opera</option>
                                        <option value="fa-brands fa-itch-io" data-icon="fa-brands fa-itch-io">fa-brands fa-itch-io</option>
                                        <option value="fa-brands fa-umbraco" data-icon="fa-brands fa-umbraco">fa-brands fa-umbraco</option>
                                        <option value="fa-brands fa-galactic-senate" data-icon="fa-brands fa-galactic-senate">fa-brands fa-galactic-senate</option>
                                        <option value="fa-brands fa-ubuntu" data-icon="fa-brands fa-ubuntu">fa-brands fa-ubuntu</option>
                                        <option value="fa-brands fa-draft2digital" data-icon="fa-brands fa-draft2digital">fa-brands fa-draft2digital</option>
                                        <option value="fa-brands fa-stripe" data-icon="fa-brands fa-stripe">fa-brands fa-stripe</option>
                                        <option value="fa-brands fa-houzz" data-icon="fa-brands fa-houzz">fa-brands fa-houzz</option>
                                        <option value="fa-brands fa-gg" data-icon="fa-brands fa-gg">fa-brands fa-gg</option>
                                        <option value="fa-brands fa-dhl" data-icon="fa-brands fa-dhl">fa-brands fa-dhl</option>
                                        <option value="fa-brands fa-pinterest-square" data-icon="fa-brands fa-pinterest-square">fa-brands fa-pinterest-square</option>
                                        <option value="fa-brands fa-square-pinterest" data-icon="fa-brands fa-square-pinterest">fa-brands fa-square-pinterest</option>
                                        <option value="fa-brands fa-xing" data-icon="fa-brands fa-xing">fa-brands fa-xing</option>
                                        <option value="fa-brands fa-blackberry" data-icon="fa-brands fa-blackberry">fa-brands fa-blackberry</option>
                                        <option value="fa-brands fa-creative-commons-pd" data-icon="fa-brands fa-creative-commons-pd">fa-brands fa-creative-commons-poption>li>
                                        <option value="fa-brands fa-playstation" data-icon="fa-brands fa-playstation">fa-brands fa-playstation</option>
                                        <option value="fa-brands fa-quinscape" data-icon="fa-brands fa-quinscape">fa-brands fa-quinscape</option>
                                        <option value="fa-brands fa-less" data-icon="fa-brands fa-less">fa-brands fa-less</option>
                                        <option value="fa-brands fa-blogger-b" data-icon="fa-brands fa-blogger-b">fa-brands fa-blogger-b</option>
                                        <option value="fa-brands fa-opencart" data-icon="fa-brands fa-opencart">fa-brands fa-opencart</option>
                                        <option value="fa-brands fa-vine" data-icon="fa-brands fa-vine">fa-brands fa-vine</option>
                                        <option value="fa-brands fa-paypal" data-icon="fa-brands fa-paypal">fa-brands fa-paypal</option>
                                        <option value="fa-brands fa-gitlab" data-icon="fa-brands fa-gitlab">fa-brands fa-gitlab</option>
                                        <option value="fa-brands fa-typo3" data-icon="fa-brands fa-typo3">fa-brands fa-typo3</option>
                                        <option value="fa-brands fa-reddit-alien" data-icon="fa-brands fa-reddit-alien">fa-brands fa-reddit-alien</option>
                                        <option value="fa-brands fa-yahoo" data-icon="fa-brands fa-yahoo">fa-brands fa-yahoo</option>
                                        <option value="fa-brands fa-dailymotion" data-icon="fa-brands fa-dailymotion">fa-brands fa-dailymotion</option>
                                        <option value="fa-brands fa-affiliatetheme" data-icon="fa-brands fa-affiliatetheme">fa-brands fa-affiliatetheme</option>
                                        <option value="fa-brands fa-pied-piper-pp" data-icon="fa-brands fa-pied-piper-pp">fa-brands fa-pied-piper-pp</option>
                                        <option value="fa-brands fa-bootstrap" data-icon="fa-brands fa-bootstrap">fa-brands fa-bootstrap</option>
                                        <option value="fa-brands fa-odnoklassniki" data-icon="fa-brands fa-odnoklassniki">fa-brands fa-odnoklassniki</option>
                                        <option value="fa-brands fa-nfc-symbol" data-icon="fa-brands fa-nfc-symbol">fa-brands fa-nfc-symbol</option>
                                        <option value="fa-brands fa-ethereum" data-icon="fa-brands fa-ethereum">fa-brands fa-ethereum</option>
                                        <option value="fa-brands fa-speaker-deck" data-icon="fa-brands fa-speaker-deck">fa-brands fa-speaker-deck</option>
                                        <option value="fa-brands fa-creative-commons-nc-eu" data-icon="fa-brands fa-creative-commons-nc-eu">option>fa-creative-commons-nc-eu</span></li>
                                        <option value="fa-brands fa-patreon" data-icon="fa-brands fa-patreon">fa-brands fa-patreon</option>
                                        <option value="fa-brands fa-avianex" data-icon="fa-brands fa-avianex">fa-brands fa-avianex</option>
                                        <option value="fa-brands fa-ello" data-icon="fa-brands fa-ello">fa-brands fa-ello</option>
                                        <option value="fa-brands fa-gofore" data-icon="fa-brands fa-gofore">fa-brands fa-gofore</option>
                                        <option value="fa-brands fa-bimobject" data-icon="fa-brands fa-bimobject">fa-brands fa-bimobject</option>
                                        <option value="fa-brands fa-facebook-f" data-icon="fa-brands fa-facebook-f">fa-brands fa-facebook-f</option>
                                        <option value="fa-brands fa-google-plus-square" data-icon="fa-brands fa-google-plus-square">fa-brands fa-google-plus-square</option>
                                        <option value="fa-brands fa-square-google-plus" data-icon="fa-brands fa-square-google-plus">fa-brands fa-square-google-plus</option>
                                        <option value="fa-brands fa-mandalorian" data-icon="fa-brands fa-mandalorian">fa-brands fa-mandalorian</option>
                                        <option value="fa-brands fa-first-order-alt" data-icon="fa-brands fa-first-order-alt">fa-brands fa-first-order-alt</option>
                                        <option value="fa-brands fa-osi" data-icon="fa-brands fa-osi">fa-brands fa-osi</option>
                                        <option value="fa-brands fa-google-wallet" data-icon="fa-brands fa-google-wallet">fa-brands fa-google-wallet</option>
                                        <option value="fa-brands fa-d-and-d-beyond" data-icon="fa-brands fa-d-and-d-beyond">fa-brands fa-d-and-d-beyond</option>
                                        <option value="fa-brands fa-periscope" data-icon="fa-brands fa-periscope">fa-brands fa-periscope</option>
                                        <option value="fa-brands fa-fulcrum" data-icon="fa-brands fa-fulcrum">fa-brands fa-fulcrum</option>
                                        <option value="fa-brands fa-cloudscale" data-icon="fa-brands fa-cloudscale">fa-brands fa-cloudscale</option>
                                        <option value="fa-brands fa-forumbee" data-icon="fa-brands fa-forumbee">fa-brands fa-forumbee</option>
                                        <option value="fa-brands fa-mizuni" data-icon="fa-brands fa-mizuni">fa-brands fa-mizuni</option>
                                        <option value="fa-brands fa-schlix" data-icon="fa-brands fa-schlix">fa-brands fa-schlix</option>
                                        <option value="fa-brands fa-square-xing" data-icon="fa-brands fa-square-xing">fa-brands fa-square-xing</option>
                                        <option value="fa-brands fa-xing-square" data-icon="fa-brands fa-xing-square">fa-brands fa-xing-square</option>
                                        <option value="fa-brands fa-bandcamp" data-icon="fa-brands fa-bandcamp">fa-brands fa-bandcamp</option>
                                        <option value="fa-brands fa-wpforms" data-icon="fa-brands fa-wpforms">fa-brands fa-wpforms</option>
                                        <option value="fa-brands fa-cloudversify" data-icon="fa-brands fa-cloudversify">fa-brands fa-cloudversify</option>
                                        <option value="fa-brands fa-usps" data-icon="fa-brands fa-usps">fa-brands fa-usps</option>
                                        <option value="fa-brands fa-megaport" data-icon="fa-brands fa-megaport">fa-brands fa-megaport</option>
                                        <option value="fa-brands fa-magento" data-icon="fa-brands fa-magento">fa-brands fa-magento</option>
                                        <option value="fa-brands fa-spotify" data-icon="fa-brands fa-spotify">fa-brands fa-spotify</option>
                                        <option value="fa-brands fa-optin-monster" data-icon="fa-brands fa-optin-monster">fa-brands fa-optin-monster</option>
                                        <option value="fa-brands fa-fly" data-icon="fa-brands fa-fly">fa-brands fa-fly</option>
                                        <option value="fa-brands fa-aviato" data-icon="fa-brands fa-aviato">fa-brands fa-aviato</option>
                                        <option value="fa-brands fa-itunes" data-icon="fa-brands fa-itunes">fa-brands fa-itunes</option>
                                        <option value="fa-brands fa-cuttlefish" data-icon="fa-brands fa-cuttlefish">fa-brands fa-cuttlefish</option>
                                        <option value="fa-brands fa-blogger" data-icon="fa-brands fa-blogger">fa-brands fa-blogger</option>
                                        <option value="fa-brands fa-flickr" data-icon="fa-brands fa-flickr">fa-brands fa-flickr</option>
                                        <option value="fa-brands fa-viber" data-icon="fa-brands fa-viber">fa-brands fa-viber</option>
                                        <option value="fa-brands fa-soundcloud" data-icon="fa-brands fa-soundcloud">fa-brands fa-soundcloud</option>
                                        <option value="fa-brands fa-digg" data-icon="fa-brands fa-digg">fa-brands fa-digg</option>
                                        <option value="fa-brands fa-tencent-weibo" data-icon="fa-brands fa-tencent-weibo">fa-brands fa-tencent-weibo</option>
                                        <option value="fa-brands fa-symfony" data-icon="fa-brands fa-symfony">fa-brands fa-symfony</option>
                                        <option value="fa-brands fa-maxcdn" data-icon="fa-brands fa-maxcdn">fa-brands fa-maxcdn</option>
                                        <option value="fa-brands fa-etsy" data-icon="fa-brands fa-etsy">fa-brands fa-etsy</option>
                                        <option value="fa-brands fa-facebook-messenger" data-icon="fa-brands fa-facebook-messenger">fa-brands fa-facebook-messenger</option>
                                        <option value="fa-brands fa-audible" data-icon="fa-brands fa-audible">fa-brands fa-audible</option>
                                        <option value="fa-brands fa-think-peaks" data-icon="fa-brands fa-think-peaks">fa-brands fa-think-peaks</option>
                                        <option value="fa-brands fa-bilibili" data-icon="fa-brands fa-bilibili">fa-brands fa-bilibili</option>
                                        <option value="fa-brands fa-erlang" data-icon="fa-brands fa-erlang">fa-brands fa-erlang</option>
                                        <option value="fa-brands fa-x-twitter" data-icon="fa-brands fa-x-twitter">fa-brands fa-x-twitter</option>
                                        <option value="fa-brands fa-cotton-bureau" data-icon="fa-brands fa-cotton-bureau">fa-brands fa-cotton-bureau</option>
                                        <option value="fa-brands fa-dashcube" data-icon="fa-brands fa-dashcube">fa-brands fa-dashcube</option>
                                        <option value="fa-brands fa-42-group" data-icon="fa-brands fa-42-group">fa-brands fa-42-group</option>
                                        <option value="fa-brands fa-innosoft" data-icon="fa-brands fa-innosoft">fa-brands fa-innosoft</option>
                                        <option value="fa-brands fa-stack-exchange" data-icon="fa-brands fa-stack-exchange">fa-brands fa-stack-exchange</option>
                                        <option value="fa-brands fa-elementor" data-icon="fa-brands fa-elementor">fa-brands fa-elementor</option>
                                        <option value="fa-brands fa-pied-piper-square" data-icon="fa-brands fa-pied-piper-square">fa-brands fa-pied-piper-square</option>
                                        <option value="fa-brands fa-square-pied-piper" data-icon="fa-brands fa-square-pied-piper">fa-brands fa-square-pied-piper</option>
                                        <option value="fa-brands fa-creative-commons-nd" data-icon="fa-brands fa-creative-commons-nd">fa-brands fa-creative-commons-noption>li>
                                        <option value="fa-brands fa-palfed" data-icon="fa-brands fa-palfed">fa-brands fa-palfed</option>
                                        <option value="fa-brands fa-superpowers" data-icon="fa-brands fa-superpowers">fa-brands fa-superpowers</option>
                                        <option value="fa-brands fa-resolving" data-icon="fa-brands fa-resolving">fa-brands fa-resolving</option>
                                        <option value="fa-brands fa-xbox" data-icon="fa-brands fa-xbox">fa-brands fa-xbox</option>
                                        <option value="fa-brands fa-searchengin" data-icon="fa-brands fa-searchengin">fa-brands fa-searchengin</option>
                                        <option value="fa-brands fa-tiktok" data-icon="fa-brands fa-tiktok">fa-brands fa-tiktok</option>
                                        <option value="fa-brands fa-facebook-square" data-icon="fa-brands fa-facebook-square">fa-brands fa-facebook-square</option>
                                        <option value="fa-brands fa-square-facebook" data-icon="fa-brands fa-square-facebook">fa-brands fa-square-facebook</option>
                                        <option value="fa-brands fa-renren" data-icon="fa-brands fa-renren">fa-brands fa-renren</option>
                                        <option value="fa-brands fa-linux" data-icon="fa-brands fa-linux">fa-brands fa-linux</option>
                                        <option value="fa-brands fa-glide" data-icon="fa-brands fa-glide">fa-brands fa-glide</option>
                                        <option value="fa-brands fa-linkedin" data-icon="fa-brands fa-linkedin">fa-brands fa-linkedin</option>
                                        <option value="fa-brands fa-hubspot" data-icon="fa-brands fa-hubspot">fa-brands fa-hubspot</option>
                                        <option value="fa-brands fa-deploydog" data-icon="fa-brands fa-deploydog">fa-brands fa-deploydog</option>
                                        <option value="fa-brands fa-twitch" data-icon="fa-brands fa-twitch">fa-brands fa-twitch</option>
                                        <option value="fa-brands fa-ravelry" data-icon="fa-brands fa-ravelry">fa-brands fa-ravelry</option>
                                        <option value="fa-brands fa-mixer" data-icon="fa-brands fa-mixer">fa-brands fa-mixer</option>
                                        <option value="fa-brands fa-lastfm-square" data-icon="fa-brands fa-lastfm-square">fa-brands fa-lastfm-square</option>
                                        <option value="fa-brands fa-square-lastfm" data-icon="fa-brands fa-square-lastfm">fa-brands fa-square-lastfm</option>
                                        <option value="fa-brands fa-vimeo" data-icon="fa-brands fa-vimeo">fa-brands fa-vimeo</option>
                                        <option value="fa-brands fa-mendeley" data-icon="fa-brands fa-mendeley">fa-brands fa-mendeley</option>
                                        <option value="fa-brands fa-uniregistry" data-icon="fa-brands fa-uniregistry">fa-brands fa-uniregistry</option>
                                        <option value="fa-brands fa-figma" data-icon="fa-brands fa-figma">fa-brands fa-figma</option>
                                        <option value="fa-brands fa-creative-commons-remix" data-icon="fa-brands fa-creative-commons-remix">option>fa-creative-commons-remix</span></li>
                                        <option value="fa-brands fa-cc-amazon-pay" data-icon="fa-brands fa-cc-amazon-pay">fa-brands fa-cc-amazon-pay</option>
                                        <option value="fa-brands fa-dropbox" data-icon="fa-brands fa-dropbox">fa-brands fa-dropbox</option>
                                        <option value="fa-brands fa-instagram" data-icon="fa-brands fa-instagram">fa-brands fa-instagram</option>
                                        <option value="fa-brands fa-cmplid" data-icon="fa-brands fa-cmplid">fa-brands fa-cmplid</option>
                                        <option value="fa-brands fa-facebook" data-icon="fa-brands fa-facebook">fa-brands fa-facebook</option>
                                        <option value="fa-brands fa-gripfire" data-icon="fa-brands fa-gripfire">fa-brands fa-gripfire</option>
                                        <option value="fa-brands fa-jedi-order" data-icon="fa-brands fa-jedi-order">fa-brands fa-jedi-order</option>
                                        <option value="fa-brands fa-uikit" data-icon="fa-brands fa-uikit">fa-brands fa-uikit</option>
                                        <option value="fa-brands fa-fort-awesome-alt" data-icon="fa-brands fa-fort-awesome-alt">fa-brands fa-fort-awesome-alt</option>
                                        <option value="fa-brands fa-phabricator" data-icon="fa-brands fa-phabricator">fa-brands fa-phabricator</option>
                                        <option value="fa-brands fa-ussunnah" data-icon="fa-brands fa-ussunnah">fa-brands fa-ussunnah</option>
                                        <option value="fa-brands fa-earlybirds" data-icon="fa-brands fa-earlybirds">fa-brands fa-earlybirds</option>
                                        <option value="fa-brands fa-trade-federation" data-icon="fa-brands fa-trade-federation">fa-brands fa-trade-federation</option>
                                        <option value="fa-brands fa-autoprefixer" data-icon="fa-brands fa-autoprefixer">fa-brands fa-autoprefixer</option>
                                        <option value="fa-brands fa-whatsapp" data-icon="fa-brands fa-whatsapp">fa-brands fa-whatsapp</option>
                                        <option value="fa-brands fa-slideshare" data-icon="fa-brands fa-slideshare">fa-brands fa-slideshare</option>
                                        <option value="fa-brands fa-google-play" data-icon="fa-brands fa-google-play">fa-brands fa-google-play</option>
                                        <option value="fa-brands fa-viadeo" data-icon="fa-brands fa-viadeo">fa-brands fa-viadeo</option>
                                        <option value="fa-brands fa-line" data-icon="fa-brands fa-line">fa-brands fa-line</option>
                                        <option value="fa-brands fa-google-drive" data-icon="fa-brands fa-google-drive">fa-brands fa-google-drive</option>
                                        <option value="fa-brands fa-servicestack" data-icon="fa-brands fa-servicestack">fa-brands fa-servicestack</option>
                                        <option value="fa-brands fa-simplybuilt" data-icon="fa-brands fa-simplybuilt">fa-brands fa-simplybuilt</option>
                                        <option value="fa-brands fa-bitbucket" data-icon="fa-brands fa-bitbucket">fa-brands fa-bitbucket</option>
                                        <option value="fa-brands fa-imdb" data-icon="fa-brands fa-imdb">fa-brands fa-imdb</option>
                                        <option value="fa-brands fa-deezer" data-icon="fa-brands fa-deezer">fa-brands fa-deezer</option>
                                        <option value="fa-brands fa-raspberry-pi" data-icon="fa-brands fa-raspberry-pi">fa-brands fa-raspberry-pi</option>
                                        <option value="fa-brands fa-jira" data-icon="fa-brands fa-jira">fa-brands fa-jira</option>
                                        <option value="fa-brands fa-docker" data-icon="fa-brands fa-docker">fa-brands fa-docker</option>
                                        <option value="fa-brands fa-screenpal" data-icon="fa-brands fa-screenpal">fa-brands fa-screenpal</option>
                                        <option value="fa-brands fa-bluetooth" data-icon="fa-brands fa-bluetooth">fa-brands fa-bluetooth</option>
                                        <option value="fa-brands fa-gitter" data-icon="fa-brands fa-gitter">fa-brands fa-gitter</option>
                                        <option value="fa-brands fa-d-and-d" data-icon="fa-brands fa-d-and-d">fa-brands fa-d-and-d</option>
                                        <option value="fa-brands fa-microblog" data-icon="fa-brands fa-microblog">fa-brands fa-microblog</option>
                                        <option value="fa-brands fa-cc-diners-club" data-icon="fa-brands fa-cc-diners-club">fa-brands fa-cc-diners-club</option>
                                        <option value="fa-brands fa-gg-circle" data-icon="fa-brands fa-gg-circle">fa-brands fa-gg-circle</option>
                                        <option value="fa-brands fa-pied-piper-hat" data-icon="fa-brands fa-pied-piper-hat">fa-brands fa-pied-piper-hat</option>
                                        <option value="fa-brands fa-kickstarter-k" data-icon="fa-brands fa-kickstarter-k">fa-brands fa-kickstarter-k</option>
                                        <option value="fa-brands fa-yandex" data-icon="fa-brands fa-yandex">fa-brands fa-yandex</option>
                                        <option value="fa-brands fa-readme" data-icon="fa-brands fa-readme">fa-brands fa-readme</option>
                                        <option value="fa-brands fa-html5" data-icon="fa-brands fa-html5">fa-brands fa-html5</option>
                                        <option value="fa-brands fa-sellsy" data-icon="fa-brands fa-sellsy">fa-brands fa-sellsy</option>
                                        <option value="fa-brands fa-sass" data-icon="fa-brands fa-sass">fa-brands fa-sass</option>
                                        <option value="fa-brands fa-wirsindhandwerk" data-icon="fa-brands fa-wirsindhandwerk">fa-brands fa-wirsindhandwerk</option>
                                        <option value="fa-brands fa-wsh" data-icon="fa-brands fa-wsh">fa-brands fa-wsh</option>
                                        <option value="fa-brands fa-buromobelexperte" data-icon="fa-brands fa-buromobelexperte">fa-brands fa-buromobelexperte</option>
                                        <option value="fa-brands fa-salesforce" data-icon="fa-brands fa-salesforce">fa-brands fa-salesforce</option>
                                        <option value="fa-brands fa-octopus-deploy" data-icon="fa-brands fa-octopus-deploy">fa-brands fa-octopus-deploy</option>
                                        <option value="fa-brands fa-medapps" data-icon="fa-brands fa-medapps">fa-brands fa-medapps</option>
                                        <option value="fa-brands fa-ns8" data-icon="fa-brands fa-ns8">fa-brands fa-ns8</option>
                                        <option value="fa-brands fa-pinterest-p" data-icon="fa-brands fa-pinterest-p">fa-brands fa-pinterest-p</option>
                                        <option value="fa-brands fa-apper" data-icon="fa-brands fa-apper">fa-brands fa-apper</option>
                                        <option value="fa-brands fa-fort-awesome" data-icon="fa-brands fa-fort-awesome">fa-brands fa-fort-awesome</option>
                                        <option value="fa-brands fa-waze" data-icon="fa-brands fa-waze">fa-brands fa-waze</option>
                                        <option value="fa-brands fa-cc-jcb" data-icon="fa-brands fa-cc-jcb">fa-brands fa-cc-jcb</option>
                                        <option value="fa-brands fa-snapchat-ghost" data-icon="fa-brands fa-snapchat-ghost">fa-brands fa-snapchat-ghost</option>
                                        <option value="fa-brands fa-snapchat" data-icon="fa-brands fa-snapchat">fa-brands fa-snapchat</option>
                                        <option value="fa-brands fa-fantasy-flight-games" data-icon="fa-brands fa-fantasy-flight-games">fa-brands fa-fantasy-fligoption>span></li>
                                        <option value="fa-brands fa-rust" data-icon="fa-brands fa-rust">fa-brands fa-rust</option>
                                        <option value="fa-brands fa-wix" data-icon="fa-brands fa-wix">fa-brands fa-wix</option>
                                        <option value="fa-brands fa-behance-square" data-icon="fa-brands fa-behance-square">fa-brands fa-behance-square</option>
                                        <option value="fa-brands fa-square-behance" data-icon="fa-brands fa-square-behance">fa-brands fa-square-behance</option>
                                        <option value="fa-brands fa-supple" data-icon="fa-brands fa-supple">fa-brands fa-supple</option>
                                        <option value="fa-brands fa-rebel" data-icon="fa-brands fa-rebel">fa-brands fa-rebel</option>
                                        <option value="fa-brands fa-css3" data-icon="fa-brands fa-css3">fa-brands fa-css3</option>
                                        <option value="fa-brands fa-staylinked" data-icon="fa-brands fa-staylinked">fa-brands fa-staylinked</option>
                                        <option value="fa-brands fa-kaggle" data-icon="fa-brands fa-kaggle">fa-brands fa-kaggle</option>
                                        <option value="fa-brands fa-space-awesome" data-icon="fa-brands fa-space-awesome">fa-brands fa-space-awesome</option>
                                        <option value="fa-brands fa-deviantart" data-icon="fa-brands fa-deviantart">fa-brands fa-deviantart</option>
                                        <option value="fa-brands fa-cpanel" data-icon="fa-brands fa-cpanel">fa-brands fa-cpanel</option>
                                        <option value="fa-brands fa-goodreads-g" data-icon="fa-brands fa-goodreads-g">fa-brands fa-goodreads-g</option>
                                        <option value="fa-brands fa-git-square" data-icon="fa-brands fa-git-square">fa-brands fa-git-square</option>
                                        <option value="fa-brands fa-square-git" data-icon="fa-brands fa-square-git">fa-brands fa-square-git</option>
                                        <option value="fa-brands fa-square-tumblr" data-icon="fa-brands fa-square-tumblr">fa-brands fa-square-tumblr</option>
                                        <option value="fa-brands fa-tumblr-square" data-icon="fa-brands fa-tumblr-square">fa-brands fa-tumblr-square</option>
                                        <option value="fa-brands fa-trello" data-icon="fa-brands fa-trello">fa-brands fa-trello</option>
                                        <option value="fa-brands fa-creative-commons-nc-jp" data-icon="fa-brands fa-creative-commons-nc-jp">option>fa-creative-commons-nc-jp</span></li>
                                        <option value="fa-brands fa-get-pocket" data-icon="fa-brands fa-get-pocket">fa-brands fa-get-pocket</option>
                                        <option value="fa-brands fa-perbyte" data-icon="fa-brands fa-perbyte">fa-brands fa-perbyte</option>
                                        <option value="fa-brands fa-grunt" data-icon="fa-brands fa-grunt">fa-brands fa-grunt</option>
                                        <option value="fa-brands fa-weebly" data-icon="fa-brands fa-weebly">fa-brands fa-weebly</option>
                                        <option value="fa-brands fa-connectdevelop" data-icon="fa-brands fa-connectdevelop">fa-brands fa-connectdevelop</option>
                                        <option value="fa-brands fa-leanpub" data-icon="fa-brands fa-leanpub">fa-brands fa-leanpub</option>
                                        <option value="fa-brands fa-black-tie" data-icon="fa-brands fa-black-tie">fa-brands fa-black-tie</option>
                                        <option value="fa-brands fa-themeco" data-icon="fa-brands fa-themeco">fa-brands fa-themeco</option>
                                        <option value="fa-brands fa-python" data-icon="fa-brands fa-python">fa-brands fa-python</option>
                                        <option value="fa-brands fa-android" data-icon="fa-brands fa-android">fa-brands fa-android</option>
                                        <option value="fa-brands fa-bots" data-icon="fa-brands fa-bots">fa-brands fa-bots</option>
                                        <option value="fa-brands fa-free-code-camp" data-icon="fa-brands fa-free-code-camp">fa-brands fa-free-code-camp</option>
                                        <option value="fa-brands fa-hornbill" data-icon="fa-brands fa-hornbill">fa-brands fa-hornbill</option>
                                        <option value="fa-brands fa-js" data-icon="fa-brands fa-js">fa-brands fa-js</option>
                                        <option value="fa-brands fa-ideal" data-icon="fa-brands fa-ideal">fa-brands fa-ideal</option>
                                        <option value="fa-brands fa-git" data-icon="fa-brands fa-git">fa-brands fa-git</option>
                                        <option value="fa-brands fa-dev" data-icon="fa-brands fa-dev">fa-brands fa-dev</option>
                                        <option value="fa-brands fa-sketch" data-icon="fa-brands fa-sketch">fa-brands fa-sketch</option>
                                        <option value="fa-brands fa-yandex-international" data-icon="fa-brands fa-yandex-international">fa-brands fa-yandex-interoption>span></li>
                                        <option value="fa-brands fa-cc-amex" data-icon="fa-brands fa-cc-amex">fa-brands fa-cc-amex</option>
                                        <option value="fa-brands fa-uber" data-icon="fa-brands fa-uber">fa-brands fa-uber</option>
                                        <option value="fa-brands fa-github" data-icon="fa-brands fa-github">fa-brands fa-github</option>
                                        <option value="fa-brands fa-php" data-icon="fa-brands fa-php">fa-brands fa-php</option>
                                        <option value="fa-brands fa-alipay" data-icon="fa-brands fa-alipay">fa-brands fa-alipay</option>
                                        <option value="fa-brands fa-youtube" data-icon="fa-brands fa-youtube">fa-brands fa-youtube</option>
                                        <option value="fa-brands fa-skyatlas" data-icon="fa-brands fa-skyatlas">fa-brands fa-skyatlas</option>
                                        <option value="fa-brands fa-firefox-browser" data-icon="fa-brands fa-firefox-browser">fa-brands fa-firefox-browser</option>
                                        <option value="fa-brands fa-replyd" data-icon="fa-brands fa-replyd">fa-brands fa-replyd</option>
                                        <option value="fa-brands fa-suse" data-icon="fa-brands fa-suse">fa-brands fa-suse</option>
                                        <option value="fa-brands fa-jenkins" data-icon="fa-brands fa-jenkins">fa-brands fa-jenkins</option>
                                        <option value="fa-brands fa-x-twitter" data-icon="fa-brands fa-x-twitter">fa-brands fa-twitter</option>
                                        <option value="fa-brands fa-rockrms" data-icon="fa-brands fa-rockrms">fa-brands fa-rockrms</option>
                                        <option value="fa-brands fa-pinterest" data-icon="fa-brands fa-pinterest">fa-brands fa-pinterest</option>
                                        <option value="fa-brands fa-buffer" data-icon="fa-brands fa-buffer">fa-brands fa-buffer</option>
                                        <option value="fa-brands fa-npm" data-icon="fa-brands fa-npm">fa-brands fa-npm</option>
                                        <option value="fa-brands fa-yammer" data-icon="fa-brands fa-yammer">fa-brands fa-yammer</option>
                                        <option value="fa-brands fa-btc" data-icon="fa-brands fa-btc">fa-brands fa-btc</option>
                                        <option value="fa-brands fa-dribbble" data-icon="fa-brands fa-dribbble">fa-brands fa-dribbble</option>
                                        <option value="fa-brands fa-stumbleupon-circle" data-icon="fa-brands fa-stumbleupon-circle">fa-brands fa-stumbleupon-circle</option>
                                        <option value="fa-brands fa-internet-explorer" data-icon="fa-brands fa-internet-explorer">fa-brands fa-internet-explorer</option>
                                        <option value="fa-brands fa-stubber" data-icon="fa-brands fa-stubber">fa-brands fa-stubber</option>
                                        <option value="fa-brands fa-telegram-plane" data-icon="fa-brands fa-telegram-plane">fa-brands fa-telegram-plane</option>
                                        <option value="fa-brands fa-telegram" data-icon="fa-brands fa-telegram">fa-brands fa-telegram</option>
                                        <option value="fa-brands fa-old-republic" data-icon="fa-brands fa-old-republic">fa-brands fa-old-republic</option>
                                        <option value="fa-brands fa-odysee" data-icon="fa-brands fa-odysee">fa-brands fa-odysee</option>
                                        <option value="fa-brands fa-square-whatsapp" data-icon="fa-brands fa-square-whatsapp">fa-brands fa-square-whatsapp</option>
                                        <option value="fa-brands fa-whatsapp-square" data-icon="fa-brands fa-whatsapp-square">fa-brands fa-whatsapp-square</option>
                                        <option value="fa-brands fa-node-js" data-icon="fa-brands fa-node-js">fa-brands fa-node-js</option>
                                        <option value="fa-brands fa-edge-legacy" data-icon="fa-brands fa-edge-legacy">fa-brands fa-edge-legacy</option>
                                        <option value="fa-brands fa-slack-hash" data-icon="fa-brands fa-slack-hash">fa-brands fa-slack-hash</option>
                                        <option value="fa-brands fa-slack" data-icon="fa-brands fa-slack">fa-brands fa-slack</option>
                                        <option value="fa-brands fa-medrt" data-icon="fa-brands fa-medrt">fa-brands fa-medrt</option>
                                        <option value="fa-brands fa-usb" data-icon="fa-brands fa-usb">fa-brands fa-usb</option>
                                        <option value="fa-brands fa-tumblr" data-icon="fa-brands fa-tumblr">fa-brands fa-tumblr</option>
                                        <option value="fa-brands fa-vaadin" data-icon="fa-brands fa-vaadin">fa-brands fa-vaadin</option>
                                        <option value="fa-brands fa-quora" data-icon="fa-brands fa-quora">fa-brands fa-quora</option>
                                        <option value="fa-brands fa-square-x-twitter" data-icon="fa-brands fa-square-x-twitter">fa-brands fa-square-x-twitter</option>
                                        <option value="fa-brands fa-reacteurope" data-icon="fa-brands fa-reacteurope">fa-brands fa-reacteurope</option>
                                        <option value="fa-brands fa-medium-m" data-icon="fa-brands fa-medium-m">fa-brands fa-medium-m</option>
                                        <option value="fa-brands fa-medium" data-icon="fa-brands fa-medium">fa-brands fa-medium</option>
                                        <option value="fa-brands fa-amilia" data-icon="fa-brands fa-amilia">fa-brands fa-amilia</option>
                                        <option value="fa-brands fa-mixcloud" data-icon="fa-brands fa-mixcloud">fa-brands fa-mixcloud</option>
                                        <option value="fa-brands fa-flipboard" data-icon="fa-brands fa-flipboard">fa-brands fa-flipboard</option>
                                        <option value="fa-brands fa-viacoin" data-icon="fa-brands fa-viacoin">fa-brands fa-viacoin</option>
                                        <option value="fa-brands fa-critical-role" data-icon="fa-brands fa-critical-role">fa-brands fa-critical-role</option>
                                        <option value="fa-brands fa-sitrox" data-icon="fa-brands fa-sitrox">fa-brands fa-sitrox</option>
                                        <option value="fa-brands fa-discourse" data-icon="fa-brands fa-discourse">fa-brands fa-discourse</option>
                                        <option value="fa-brands fa-joomla" data-icon="fa-brands fa-joomla">fa-brands fa-joomla</option>
                                        <option value="fa-brands fa-mastodon" data-icon="fa-brands fa-mastodon">fa-brands fa-mastodon</option>
                                        <option value="fa-brands fa-airbnb" data-icon="fa-brands fa-airbnb">fa-brands fa-airbnb</option>
                                        <option value="fa-brands fa-wolf-pack-battalion" data-icon="fa-brands fa-wolf-pack-battalion">fa-brands fa-wolf-pack-battaliooption>li>
                                        <option value="fa-brands fa-buy-n-large" data-icon="fa-brands fa-buy-n-large">fa-brands fa-buy-n-large</option>
                                        <option value="fa-brands fa-gulp" data-icon="fa-brands fa-gulp">fa-brands fa-gulp</option>
                                        <option value="fa-brands fa-creative-commons-sampling-plus" data-icon="fa-brands fa-creative-commons-sampling-plus">option>fa-creative-commons-sampling-plus</span></li>
                                        <option value="fa-brands fa-strava" data-icon="fa-brands fa-strava">fa-brands fa-strava</option>
                                        <option value="fa-brands fa-ember" data-icon="fa-brands fa-ember">fa-brands fa-ember</option>
                                        <option value="fa-brands fa-canadian-maple-leaf" data-icon="fa-brands fa-canadian-maple-leaf">fa-brands fa-canadian-maple-leaoption>li>
                                        <option value="fa-brands fa-teamspeak" data-icon="fa-brands fa-teamspeak">fa-brands fa-teamspeak</option>
                                        <option value="fa-brands fa-pushed" data-icon="fa-brands fa-pushed">fa-brands fa-pushed</option>
                                        <option value="fa-brands fa-wordpress-simple" data-icon="fa-brands fa-wordpress-simple">fa-brands fa-wordpress-simple</option>
                                        <option value="fa-brands fa-nutritionix" data-icon="fa-brands fa-nutritionix">fa-brands fa-nutritionix</option>
                                        <option value="fa-brands fa-wodu" data-icon="fa-brands fa-wodu">fa-brands fa-wodu</option>
                                        <option value="fa-brands fa-google-pay" data-icon="fa-brands fa-google-pay">fa-brands fa-google-pay</option>
                                        <option value="fa-brands fa-intercom" data-icon="fa-brands fa-intercom">fa-brands fa-intercom</option>
                                        <option value="fa-brands fa-zhihu" data-icon="fa-brands fa-zhihu">fa-brands fa-zhihu</option>
                                        <option value="fa-brands fa-korvue" data-icon="fa-brands fa-korvue">fa-brands fa-korvue</option>
                                        <option value="fa-brands fa-pix" data-icon="fa-brands fa-pix">fa-brands fa-pix</option>
                                        <option value="fa-brands fa-steam-symbol" data-icon="fa-brands fa-steam-symbol">fa-brands fa-steam-symbol</option>
                                </select>
                            </div>
                            @error('title')
                                <small><span class="text-danger">{{ $message }}</span></small>
                            @enderror
                        </div>
                    </div>
                    <div class="card-footer">
                        <input type="submit" value="Save" class="btn text-white btn-success m-r-3" />
                        <a href="/admin/service" class="btn text-white btn-danger">Cancel</a>
                    </div>
                </div>
            </form>
        </div>
    </section>
</div>
