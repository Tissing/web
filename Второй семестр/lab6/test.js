function find(object, path) {
    let array_path = path.split('.');
    let current_obj = object;
    for(let i = 0; i < array_path.length; i++)
    {
      if(Object.keys(current_obj).includes(array_path[i]))
        current_obj = current_obj[array_path[i]];
      else
        return undefined;
    }
    return current_obj;
  }

let object = { 
    user: { 
        name: { 
          first: 'John', 
          last: 'Snow' 
        }
    } };

console.log(find(object, 'user.name.first'));