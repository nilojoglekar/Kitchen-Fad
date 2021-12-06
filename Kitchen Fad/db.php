<?php
//11 November 2021//
//Nilophar Joglekar 19BCE2482//
$DBservername = "localhost:3307";
$User = "root";
$Pwd = "";

$con = mysqli_connect($DBservername,$User,$Pwd);
if($con)
{
    echo "Connected Successfully";
    
    if(mysqli_query($con,"create database Customer"))
    {
        echo "<br>Database created";
    }
    else
    {
        echo "<br>Database already exist";
    }

    mysqli_select_db($con,"Customer");
    echo "<br>Selected Customer database";

    $table1 = "CREATE TABLE IF NOT EXISTS `information`(`c_id` int(30) NOT NULL AUTO_INCREMENT,
    `c_fname` varchar(30) DEFAULT NULL,
    `c_lname` varchar(30) DEFAULT NULL,
    `c_age` varchar(30) DEFAULT NULL,
    `c_contact` varchar(20) DEFAULT NULL,
    `c_gender` varchar(30) DEFAULT NULL,
    `email` varchar(30) NOT NULL,
    `password` varchar(30) NOT NULL,
    PRIMARY KEY (`c_id`),
    UNIQUE KEY `c_id` (`c_id`)
    )ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ";

    $table2 = "CREATE TABLE IF NOT EXISTS `admin` (
  `a_id` int(11) NOT NULL AUTO_INCREMENT,
  `a_fname` varchar(10) DEFAULT NULL,
  `a_lname` varchar(10) DEFAULT NULL,
  `a_department` varchar(20) NOT NULL,
  `a_salary` int(11) DEFAULT NULL,
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ";

$sql="INSERT INTO `information` (`c_id`, `c_fname`, `c_lname`, `c_age`, `c_contact`, `c_gender`, `email`, `password`) VALUES
(101, 'Rahul', 'Sharma', '42', '9926519823', 'Male', 'rahul.sharma@gmail.com', 'abcdefa'),
(102, 'Riya', 'Gupta', '22', '9254376189', 'Female', 'riya.gupta@gmail.com', '123abcd'),
(103, 'Rohit', 'agrawal', '29', '976124512', 'Male', '123rohit@gmail.com', 'hello12'),
(104, 'Prateek', 'Sharma', '35', '8449268172', 'Male', 'prateek123@gmail.com', 'aloha56'),
(105, 'sumit', 'sharma', '20', '9999999999', 'Male', 'sharma@gmail.com', '123123123'),
(106, 'dhruv', 'mehta', '20', '9191919191', 'Male', 'dhruv@gmail.com', '123123123')";

    if(mysqli_query($con,$table1))
    {
        echo "<br>Information table created";
    }
    else
    {
        echo "<br>Information table already exist";
    }

    if(mysqli_query($con,$table2))
    {
        echo "<br>Admin table created";
    }
    else
    {
        echo "<br>Admin table already exist";
    }

    if (mysqli_query($con,$sql) === TRUE) {
        echo "New record created successfully";
      } 
      else{
          echo "<br>Already Inserted";
      }
}
else
{
    echo "Error in Connection";
}

mysqli_close($con);


?>
<br>
