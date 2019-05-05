<?php

$con = mysqli_connect("localhost","shorol","1234","shoutit");


if(mysqli_connect_errno())
{
	echo 'Failed to connect' .mysqli_connect_errno();
}

