<html lang="en" ng-app="">
<body ng-init="price=500;count=23">
<input type="number"  ng-model="price" >
<input type="number"  ng-model="count" >
<p>{{price * count}}</p>
<script type="text/javascript" src="js/angular.min.js" ></script>
</body>
</html>