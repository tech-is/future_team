// console.log("テスト");

function calculation1()
{
        var elements = document.form1.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form1.total.value = total;
        // console.log(total);
}

function calculation2()
{
    var elements = document.form2.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form2.total.value = total;
        // console.log(total);
}

function calculation3()
{
    var elements = document.form3.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form3.total.value = total;
        // console.log(total);
}

function calculation4()
{
    var elements = document.form4.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form4.total.value = total;
        // console.log(total);
}

function calculation5()
{
    var elements = document.form5.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form5.total.value = total;
        // console.log(total);
}

function calculation6()
{
    var elements = document.form6.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form6.total.value = total;
        // console.log(total);
}

function calculation7()
{
    var elements = document.form7.getElementsByClassName("car_option");
        var elementLength = elements.length;
        // console.log(elementLength);
        var total = 0;
        // selectの処理
        for(var i = 0; i < elementLength; i++){
            // console.log(elements[i].tagName);
            var element = elements[i];
            // console.log(element);
            if(element.tagName == "SELECT"){
                var num = element.selectedIndex;
                // console.log(num);
                // select合計
                total += parseInt(element.options[num].value);
            }
            // checkboxの処理
            else if(element.tagName == "INPUT" && element.type == "checkbox" && element.checked){
                // checkbox合計
                total += parseInt(element.value);
            }
        }
        document.form7.total.value = total;
        // console.log(total);
}

