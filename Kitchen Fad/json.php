<html>
    <!--Nilophar Joglekar 19BCE2482-->
    <!--2 December 2021-->
    <head>
        <h5>19BCE2482 Nilophar Joglekar</h5>
        <h5>2 December 2021</h5>

    </head>
<body>
<script>
    var Customer=[{"Name":"Jane Narya","userid":"ID 8010","address":"Geneva"},
    {"Name":"Jack Jill","userid":"ID 8011","address":"Antwerp"},
    {"Name":"Daniel John","userid":"ID 8012","address":"Victoria"},
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
        document.writeln(Customer2.Geneva[i].userid);
    }
</script>
</body>
</html>