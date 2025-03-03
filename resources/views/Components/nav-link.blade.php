 @props(['present' => false])

 <a class="{{ $present ? 'active': '' }} nav-link"
     {{ $attributes }}>{{ $slot }}</a>