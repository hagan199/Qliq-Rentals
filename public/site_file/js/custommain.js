<script>
    var mealsByCategory = {
        A: ["Soup", "Juice", "Tea", "Others"],
        B: ["Soup", "Juice", "Water", "Others"],
        C: ["Soup", "Juice", "Coffee", "Tea", "Others"]
    }
    
        function changecat(value) {
            if (value.length == 0) document.getElementById("category").innerHTML = "<option></option>";
            else {
                var catOptions = "";
                for (categoryId in mealsByCategory[value]) {
                    catOptions += "<option>" + mealsByCategory[value][categoryId] + "</option>";
                }
                document.getElementById("category").innerHTML = catOptions;
            }
        }



</script>






