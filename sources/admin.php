<?php
	session_start();
	include "include/connect.php";
	//check admin:admin123
    $admin_ses = $_SESSION['sadmin'];
	if(!isset($admin_ses)){
		header('location:login.php');
	 };
?>
<style>
	.toggler {
  width: 72px;
  /* margin: 40px auto; */
  margin-left: 90px;
  margin-top: 40px;
}

.toggler input {
  display: none;
}

.toggler label {
  display: flex;
  justify-content: space-between; /* Canh chỉnh đoạn văn bản Lock và Unlock */
  position: relative;
  width: 72px;
  height: 36px;
  border: 1px solid #d6d6d6;
  border-radius: 36px;
  background: #e4e8e8;
  cursor: pointer;
}

.toggler label::after {
  display: block;
  border-radius: 100%;
  background-color: #d7062a;
  content: '';
  animation-name: toggler-size;
  animation-duration: 0.15s;
  animation-timing-function: ease-out;
  animation-direction: forwards;
  animation-iteration-count: 1;
  animation-play-state: running;
}

.toggler label::after, .toggler label .toggler-on, .toggler label .toggler-off {
  position: absolute;
  top: 50%;
  left: 25%;
  width: 26px;
  height: 26px;
  transform: translateY(-50%) translateX(-50%);
  transition: left 0.15s ease-in-out, background-color 0.2s ease-out, width 0.15s ease-in-out, height 0.15s ease-in-out, opacity 0.15s ease-in-out;
}

.toggler input:checked + label::after, .toggler input:checked + label .toggler-on, .toggler input:checked + label .toggler-off {
  left: 75%;
}

.toggler input:checked + label::after {
  background-color: #50ac5d;
  animation-name: toggler-size2;
}

.toggler .toggler-on, .toggler .toggler-off {
  opacity: 1;
  z-index: 2;
}

.toggler input:checked + label .toggler-off, .toggler input:not(:checked) + label .toggler-on {
  width: 0;
  height: 0;
  opacity: 0;
}

.toggler .path {
  fill: none;
  stroke: #fefefe;
  stroke-width: 7px;
  stroke-linecap: round;
  stroke-miterlimit: 10;
}

@keyframes toggler-size {
  0%, 100% {
    width: 26px;
    height: 26px;
  }

  50% {
    width: 20px;
    height: 20px;
  }
}

@keyframes toggler-size2 {
  0%, 100% {
    width: 26px;
    height: 26px;
  }
}

  50% {
    width: 20px;
    height: 20px;
  }

  .toggle-text {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  margin-left: 40px; /* Điều chỉnh khoảng cách giữa đoạn văn bản và toggle */
}

.toggle-text-left {
  left: 40px;
}

.toggle-text-right {
  right: 80px;
}
 
</style>
<?php include 'include/header.php'; ?>
	<body>
	<?php include 'include/navbar_admin.php'; ?>
	<h1 class="text-center">Lock Status</h1>
		<div class="toggler">
			
			<input id="toggler-1" name="toggler-1" type="checkbox" value="1">
			<label for="toggler-1">
				<span class="toggle-text toggle-text-left">Lock</span>
				<svg class="toggler-on" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
					<polyline class="path check" points="100.2,40.2 51.5,88.8 29.8,67.5"></polyline>
				</svg>
				
				<svg class="toggler-off" version="1.1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 130.2 130.2">
					<line class="path line" x1="34.4" y1="34.4" x2="95.8" y2="95.8"></line>
					<line class="path line" x1="95.8" y1="34.4" x2="34.4" y2="95.8"></line>
				</svg>
				<span class="toggle-text toggle-text-right">Unlock</span>
			</label>
		</div>
	</body>
</html>
