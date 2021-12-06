<html>
    <!--Nilophar Joglekar 19BCE2482-->
    <!--2 December 2021-->
    <head>

    </head>
<body>
<script>
    var Customer=[{"Name":"Rahul Sharma ","userid":"101","email":"rahul.sharma@gmail.com","age":"42","number":"9926519823"},
    {"Name":"Riya Gupta ","userid":"102","email":"riya.gupta@gmail.com","age":"22","number":"9254376189"}
    {"Name":"Rohit Agrawal ","userid":"103","email":"123rohit@gmail.com","age":"29","number":"976124512"}
    {"Name":"Prateek Sharma ","userid":"104","email":"prateek123@gmail.com ","age":"35","number":"8449268172"}
    {"Name":"Sumit Sharma","userid":"105","email":"	sharma@gmail.com ","age":"20","number":"9999999999 "}
    {"Name":"Dhruv Mehta ","userid":"106","email":"dhruv@gmail.com","age":"20","number":"	9191919191 "}
    {"Name":"Amit Kanel  ","userid":"107","email":"amit.kanel@gmail.com","age":"42","number":"	9874512564"}
    

 
]

    document.write(Customer.length);
    var i=0;
    for(i=0;i<Customer.length;i++){
        document.writeln(Customer[i].userid);
    }

    var Customer2={"Geneva":[{"Name":"Jane Narya","userid":"ID 8010"}],
                   "Antwerp":[{"Name":"Jack Jill","userid":"ID 8011"}],
                   "Victoria":[{"Name":"Daniel John","userid":"ID 8012"}]}
    
    document.writeln(Customer2.Geneva.length);
    document.writeln(Customer2.Antwerp.length);
    document.writeln(Customer2.Victoria.length);

    for(i=0;i<Customer2.Geneva.length;i++){
        document.writelin(Customer2.Geneva[i].userid);
    }
</script>
</body>
</html>
