@foreach($items as $item)

    @if($item->isActive)
      <li @if($item->hasChildren()) class="kt-menu__item  kt-menu__submenu kt-menu__item--open kt-menu__item--here" aria-haspopup="true" data-ktmenu-submenu-toggle="hover" 
      @else class="kt-menu__item kt-menu__item--active" aria-haspopup="true"@endif>

    @else
      <li  @lm_attrs($item) @if($item->hasChildren()) class="kt-menu__item  kt-menu__submenu" aria-haspopup="true" data-ktmenu-submenu-toggle="hover" 
      @else class="kt-menu__item " aria-haspopup="true"@endif  @lm_endattrs>
    @endif


      @if($item->hasChildren())
        <a href="javascript:;" class="kt-menu__link kt-menu__toggle">  
      @else
        @if($item->url())
          <a href="{!! $item->url() !!}" class="kt-menu__link ">
        @else
          <a href="javascript:;" class="kt-menu__link kt-menu__toggle"> 
        @endif 
      @endif
        @if($item->attr('icon'))
      	<i class="kt-menu__link-icon {!! $item->attr('icon') !!}"></i>
        @else
        <i class="kt-menu__link-bullet kt-menu__link-bullet--dot"><span></span></i>
        @endif
      	<span class="kt-menu__link-text">
      		{!! $item->title !!} 
        </span>
      		@if($item->hasChildren())
      		  <i class="kt-menu__ver-arrow la la-angle-right"></i>
      		@endif
       </a>
      @if($item->hasChildren())
        <div class="kt-menu__submenu "><span class="kt-menu__arrow"></span>
          <ul class="kt-menu__subnav">
            @include('backend.partials.admin.admin-custom-menu-items', ['items' => $item->children()])
          </ul>
        </div>
      @endif
  </li>
@endforeach