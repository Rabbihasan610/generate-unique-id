
### Generate Unique id developed custome package


## Example
 

''''''
use use Hasan\LaravelUniqueId\UniqueId;

return UniqueId::generate(5);
// 00005
return UniqueId::generate(6);
// 00006

return UniqueId::generate(7);
// 00006

return UniqueId::generate(8);
// 00006
.....
