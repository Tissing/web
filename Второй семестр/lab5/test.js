function createFunctions(n) {
    var callbacks = [];
  
    for (var i=0; i<n; i++) {
      callbacks.push(function() {
        const j = i;
        return j;
      });
    }
    
    return callbacks;
  }

var callbacks = createFunctions(5);

for (var i=0; i<callbacks.length; i++) {
    console.log(callbacks[i]() + " " + i);
}