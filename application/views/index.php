<html>
<head>
    <title>Contact form</title>
</head>
</html>
<body>
<?php
$this->load->helper("form");
echo form_open("welcome/contact");
echo form_label("Name:", "name");
echo validation_errors();
$data = array(
    'id'=> 'name',
    'name' => 'name',
    'value' => set_value('name'),
);
echo form_input($data).'</br>';
echo form_error('name');

echo form_label('Email:', 'email');
$data = array(
    'id'=> 'email',
    'name' => 'email',
    'value' => set_value('email'),
);
echo form_input($data).'</br>';
echo form_error('email');

echo form_label('Message:', 'message');
$data = array(
    'id'=> 'message',
    'name' => 'message',
    'value' => set_value('message'),
);
echo form_textarea($data).'</br>';
echo form_error('message');
$data = array(
    'id' => 'submit',
    'name' => 'submit',
    'value' => 'Save post',
    'style' => 'padding: 10px width: 200px',
);
echo form_submit($data);
echo form_close();
?>
</body>
<center>
<footer>
    Yani 2015
</footer>
</center>
