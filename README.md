# Himatif Database Application - Web Version

For maintaining the database


# Change log

### [27 Juli 2018]
- add library bcrypt for decrypting password from database (for instruction see below)
- login with username & password base on database (soon will use session for save login state)
- fixing some view
- login error open new view errorpage (temporarry)
- logout redirect to loginpage

### add library bcrypt (IMPORTANT)
- download bcrypt source from here (https://github.com/dwightwatson/codeigniter-bcrypt.git)
- move config/bcrypt.php to application/config/
- move libraries/Bcrypt.php to application/libraries/ 

### [19 Juli 2018 - 10:04]
- Login button redirect into BK page (temporary)
- Adding BK page with 3 sub page (BE, DPA, Mubes)

### [18 Juli 2018 - 19:38]
- Adding view homepage
- Changing the footer into Fixed

# Structure
### Model 
- Location
  - `application/models`
- Format file rule
  - `<Filename>_model.php` - Capitalized, ex: Benda_model.php


### View
- Location
  - `application/views/-` - For body template
  - `application/views/templates` - For edit global header/footer 
- Format file rule
  - `<filename>.php` - All lowercase, ex: benda.php

### Controller 
- Location
  - `application/controllers`
- Format file rule
  - `<Filename>.php` - Capitalized, ex: Benda.php

