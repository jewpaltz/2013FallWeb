
<div class="container">
	<div id="category-list">
		
	</div>
	<div id="item-list" >
		<ul class="nav nav-pills" data-bind="foreach: categoryList">
		  <li data-bind="css: { active: $data == $root.currentCategory() }" >
		  	<a href="#" data-bind="text: Name, click: $root.selectCategory"></a>
		  </li>
		</ul>
	</div>
</div>
<? function Scripts(){ ?>
	
  	<? global $model; ?>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jqueryui/1.10.3/jquery-ui.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout/3.0.0/knockout-min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/knockout.mapping/2.4.1/knockout.mapping.js"></script>
	
	<script type="text/javascript">
	$(function(){
		var vm = {
			categoryList: ko.observableArray(),
			currentCategory: ko.observable(),
			itemList: ko.observableArray(),
			cart: ko.observableArray(),
			
			selectCategory: function(){
				vm.currentCategory(this);
			}
		}
		ko.applyBindings(vm);
		
		
		$.get("?action=categories&format=json",null,null,'json')
			.always(function (results) {
				vm.categoryList(results.model);
			})
				
		
	});
	</script>
<? } ?>