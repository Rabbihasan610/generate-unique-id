
### Generate Unique id developed custome package


## Example
 
```sh
use Hasan\LaravelUniqueId\UniqueId;
```

 
```sh
return UniqueId::generate(5);
// 00005
return UniqueId::generate(6);
// 00006

return UniqueId::generate(7);
// 00006

return UniqueId::generate(8);
// 00006
 
```
