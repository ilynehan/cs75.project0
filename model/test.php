<!DOCTYPE html>

<html>
    <head>
        <title>PizzaML Categories</title>
    <head>
    <body>
        <h1>List of Categories</h1>
        <ul>
            <?
                $dom = simplexml_load_file("menu.xml");
                foreach ($dom->xpath("/menu/category") as $category)
                {
                    print "<li>";
                    print $category["name"];
                    print "<ol>";
                    foreach($category->item as $item) {
                        print "<li>";
                        print $item["name"];
                        print "</li>";
                    }
                    print "</ol>";
                    print "</li>";
                }
            ?>
        </ul>
    </body>
</html>
