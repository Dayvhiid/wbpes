<style>
    html{
    background: lightgray;
    font-family: sans-serif;
    border: 0;
    padding: 0;
    
    align-content: center;

    
}

.search{
    width: 100%;
    min-height: 100vh;
    display: flex;
    align-items: center;
    justify-content: center;
    
}

.search-bar{
    width: 100%;
    max-width: 700px;
    background-color: rgba(255, 255, 255, 0.2);
    display: flex;
    align-content: center;
    border-radius: 60px;
    padding: 4px 20px;
    color: black;
    margin-top: -35%;
}

.search-bar input {
    background: transparent;
    flex: 1;
    border: 0;
    outline: none;
    padding: 5px 5px;
    font-size: 20px;
    color: #cac7ff;

}

::placeholder{
    color: #cac7ff;
}

.search-bar button img{
    width: 25px;
}
.search-bar button{
    border: 0;
    border-radius: 50%;
    width: 60px;
    height: 60px;
    background: #cac7ff;
    cursor: pointer;
}
</style>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search Box</title>
    <link rel="stylesheet" >
    
</head>
<body>
    <div class="search">
    <form action="{{route('supervisor.find')}}" type="get" class="search-bar">
        <input type="text" placeholder="Search" name="query">
        <button type="submit"> <img src="./images/search.png" alt=""></button>
    </form>
    </div>
</body>
</html>