
<?php
require_once "../domen.php";
require_once "../themes/3/v.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Restaurant | Menu</title>
    <meta name="theme-color" content="#000000">
    <meta name="robots" content="index, follow">
    <meta name="description" content="Explore our restaurant’s delicious menu featuring a variety of gourmet dishes, fresh ingredients, and bold flavors. From mouthwatering appetizers to exquisite main courses and decadent desserts, we have something for every taste. Check out our full menu and savor the experience!">
    <meta property="og:title" content="My Restaurant | Menu">
    <meta property="og:description" content="Explore our restaurant’s delicious menu featuring a variety of gourmet dishes, fresh ingredients, and bold flavors. From mouthwatering appetizers to exquisite main courses and decadent desserts, we have something for every taste. Check out our full menu and savor the experience!">
    <meta property="og:url" content="<?=$domen;?>/menu/my-restaurant">
    <link rel="stylesheet" href="<?=$domen;?>/themes/3/style.css?v=<?=$v;?>">
    <script src="<?=$domen;?>/js/scripts.js?v=<?=$v;?>"></script>
    <script>
        const phn = "0710919827";
        const linkinst = "https://www.instagram.com/it.soffice?igsh=YXN2bWRiZG5icTdn";
        const linkfb = "https://web.facebook.com/profile.php?id=61557895020972";
        const menujson = {"lists":[{"nms":"Starters (Mezze)","list":[{"nm":"Hummus\\\" with Harissa\\'s","desc":"Chickpeas, tahini, olive oil, lemon juice, garlic, harissa.","pr":"30.00"},{"nm":"Zaalouk (Eggplant Dip)","desc":"Eggplants, tomatoes, garlic, spices (paprika, cumin), olive oil.","pr":"35.00"},{"nm":"Moroccan Sambousek","desc":"Crispy pastries filled with spiced meat, onions, and herbs.","pr":"40.00"}]},{"nms":"Soups","list":[{"nm":"Harira","desc":"Tomato soup with lentils, chickpeas, lamb, and spices (cinnamon, ginger, turmeric).","pr":"45.00"},{"nm":"Pumpkin and Carrot Soup","desc":"Pumpkin, carrots, onions, ginger, cream, coriander.","pr":"39.00"}]},{"nms":"Salads","list":[{"nm":"Tabbouleh with Couscous","desc":"Couscous, parsley, mint, tomatoes, lemon juice, olive oil.","pr":"40.00"},{"nm":"Moroccan Orange Salad","desc":"Oranges, cinnamon, honey, almonds.","pr":"35.00"}]},{"nms":"Main Dishes","list":[{"nm":"Chicken Tagine with Lemon","desc":"Chicken, preserved lemons, olives, ginger, spices (turmeric, coriander).","pr":"75.00"},{"nm":"Couscous with Seven Vegetables","desc":"Couscous, carrots, zucchini, potatoes, pumpkin, chickpeas, onions, spices.","pr":"68.00"},{"nm":"Merguez (Moroccan Sausages)","desc":"Grilled vegetables, lamb sausages, spices (chili, garlic, cumin).","pr":"72.00"}]},{"nms":"Desserts","list":[{"nm":"Basbousa","desc":"Semolina cake with coconut and sugar syrup.","pr":"30.00"},{"nm":"Pastilla with Almonds and Honey","desc":"Crispy pastry, nuts, honey, powdered sugar, cinnamon.","pr":"35.00"}]},{"nms":"Beverages","list":[{"nm":"Moroccan Mint Tea","desc":"Green tea, mint, sugar.","pr":"20.00"},{"nm":"Orange Fresh with Cinnamon","desc":"Freshly squeezed orange juice, cinnamon.","pr":"25.00"},{"nm":"Mineral Water (0.5 L)","desc":"Still or sparkling.","pr":"12.00"}]}]};
    </script>
</head>
<body>
    <?php
    require_once "../themes/3/page.php";
    require_once "../themes/footer.php";
    ?>
    <script src="<?=$domen;?>/themes/3/script.js?v=<?=$v;?>"></script>
</body>
</html>
            