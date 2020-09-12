<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-title">Blog</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-newspaper-o"></i> News</a>
    <ul class="nav-dropdown-items">
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('article') }}"><i class="nav-icon la la-newspaper-o"></i> <span>Articles</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-list"></i> <span>Categories</span></a></li>
      <li class="nav-item"><a class="nav-link" href="{{ backpack_url('tag') }}"><i class="nav-icon la la-tag"></i> <span>Tags</span></a></li>
    </ul>
</li>

<li class="nav-title">Pages</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('education') }}'><i class='nav-icon la la-list'></i> Education</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('experience') }}'><i class='nav-icon la la-list'></i> Experiences</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('project') }}'><i class='nav-icon la la-list'></i> Projects</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('skill') }}'><i class='nav-icon la la-list'></i> Skills</a></li>