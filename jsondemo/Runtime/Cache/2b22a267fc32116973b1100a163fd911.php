<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<title>welcome!</title>
</head>

<body>
  <?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): ++$i;$mod = ($i % 2 )?><?php echo ($vo["id"]); ?> -- <?php echo ($vo["status"]); ?> -- <?php echo ($vo["name"]); ?> -- <?php echo ($vo["tool"]); ?> -- <?php echo ($vo["number"]); ?> 
    <br><?php endforeach; endif; else: echo "" ;endif; ?>

</body>
</html>