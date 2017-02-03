<% if $averageRating == 0 %>
	<img src="/reviewable/images/star-off.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-off.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-off.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-off.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">
<% else_if $averageRating == 1 %>
	<img src="/reviewable/images/star-on.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-off.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-off.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-off.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">
<% else_if $averageRating == 2 %>
	<img src="/reviewable/images/star-on.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-on.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-off.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-off.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">
<% else_if $averageRating == 3 %>
	<img src="/reviewable/images/star-on.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-on.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-on.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-off.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">
<% else_if $averageRating == 4 %>
	<img src="/reviewable/images/star-on.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-on.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-on.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-off.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-off.png" alt="5" title="gorgeous">
<% else_if $averageRating == 5 %>
	<img src="/reviewable/images/star-on.png" alt="1" title="bad"> 
	<img src="/reviewable/images/star-on.png" alt="2" title="poor"> 
	<img src="/reviewable/images/star-on.png" alt="3" title="regular"> 
	<img src="/reviewable/images/star-on.png" alt="4" title="good"> 
	<img src="/reviewable/images/star-on.png" alt="5" title="gorgeous">
<% end_if %>
