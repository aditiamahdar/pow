var cache = {};
var pow = function(a, b){
  if(b == 0) return 1;
  if(b == 1) return a;

  if (cache[[a, b]]) {
    return cache[[a, b]]
  } else {
    return cache[[a, b]] = a * pow(a, b - 1);
  }
};
