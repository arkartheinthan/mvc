Folder Structure
DB Refactoring by OOP 
Query QueryBuilder
Routes path
Controllers
Models
Views

----------------------------------------------------------

Flags

[L] => Last -> သတ်မှတ်ထားတဲ့ rule နဲ့ကိုက်ညီပါက ကျန်rule တွေဆက်အလုပ်မလုပ်ပါနဲ့လို့ဆိုလိုတာဖြစ်ပါတယ်။
[F] => Forbidden -> rule နဲ့ကိုက်ညီပါက 403 ကို return ပေးမှာပါ။
[NC] => No case => lower,upper ကိုထည့်မစစ်ပါနဲ့။
[QSA] => Request url ရဲ့query string ကို rewrite url မှာဆက်လက်ဖော်ပြပေးပါ။
[R] => url ကို rewrite လုပ်ရုံမကပဲ redirect လုပ်ပေးခြင်းဖြစ်ပါသည်။

<IfModule mod_rewrite.c>
    RewriteEngine On
    RewriteRule ^$ public/ [L]
    RewriteRule (.*) public/$1 [L]
</IfModule>

RewriteBase
 RewriteCond => Server Variable တိုက်စစ်ပေးတာ
 RewriteRule => Url Pattern^(.+)$ , URL Path index.php?url=$1 , Flag [QSA,L]
 ^ => Initial point (စမှတ်)
 (.+) => မည်သည့် character မဆိုလက်ခံတယ် 
 $ => ဆုံးမှတ်