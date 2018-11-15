

function loadOptimist() {
  var OptimistResult = new XMLHttpRequest();
  OptimistResult.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("changeResultOptimist").innerHTML =
      this.responseText;
    }
  };
  OptimistResult.open("GET", "includes/optimist.html", true);
  OptimistResult.send();
}


function loadInBetweener() {
  var InBetweenResult = new XMLHttpRequest();
  InBetweenResult.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("changeResultInBetween").innerHTML =
      this.responseText;
    }
  };
  InBetweenResult.open("GET", "includes/inbetween.html", true);
  InBetweenResult.send();
}

function loadPessimist() {
  var PessimistResult = new XMLHttpRequest();
  PessimistResult.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("changeResultPessimist").innerHTML =
      this.responseText;
    }
  };
  PessimistResult.open("GET", "includes/pessimist.html", true);
  PessimistResult.send();
}


