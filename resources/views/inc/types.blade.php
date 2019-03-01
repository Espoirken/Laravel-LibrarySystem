<script>
    // Put this script in header or above select element
    function check(elem) {
        // use one of possible conditions
        // if (elem.value == 'Other')
        // if (elem.value == '1') is Student
        if (elem.value == '1') {
            document.getElementById("other-div").style.display = 'block';
        } else {
            document.getElementById("other-div").style.display = 'none';
            document.getElementById("otherName").value = null;
        }
    }
</script>