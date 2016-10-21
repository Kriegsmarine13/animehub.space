<script type="text/javascript" src="js/jquery-3.0.0"></script>
<script type="text/javascript" src="js/jquery.cookie"></script>
<script type="text/javascript" src="js/jquery.powertimer"></script>

<style>
#msg-box{
	overflow: auto; 
	width: 750px;
	height: 300px;
	border: 1px solid black;
	padding: 5px;
	margin: 0px;
	display: inline-block;
	background: #FFF;
	margin: 32px 0 0 32px;
}
#msg-box ul{
	list-style: none;
	padding: 0px;
	margin: 0px;
}
#t-box{
	margin-left: 32px;
}
</style>

<div id ="msg-box">
	<ul>
	</ul>
</div>
<form id="t-box" action="?" style="">
	Name: <input type="text" class='name' style="width:1000px;">
	<input type="text" class='msg' style="width:500px;">
	<input type="submit" value="Send" style="margin-top:5px">
</form>