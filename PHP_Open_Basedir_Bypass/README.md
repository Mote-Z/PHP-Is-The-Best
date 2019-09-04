# PHP_Open_Basedir_Bypass

## 0x00 

​	How to bypass open_basedir

> Limit the files that can be accessed by PHP to the specified directory-tree, including the file itself. This directive is *NOT*affected by whether Safe Mode is turned On or Off.
>

## 0x01  List



1. 2019/8/29 [LD_PRELOAD](https://github.com/Mote-Z/PHP-Is-The-Best/tree/master/PHP_Disable_Functions_Bypass/LD_PRELOAD)
2. 2019/9/1 [PHP-FPM](./PHP-FPM)
3. 2019/9/4 [chdir()+ini_set()](./chdir+ini_set)

4. 2019/9/4 [glob://伪协议](./glob)



## 0x02 TODO

1. glob://伪协议   DirectoryIterator+glob://     opendir()+readdir()+glob://    利用bindtextdomain()函数Bypass    利用SplFileInfo::getRealPath()类方法Bypass    利用realpath()函数Bypass
2. 利用命令执行函数Bypass
3. 利用symlink()函数Bypass



## 0x03 Reference

https://www.php.net/manual/zh/ini.core.php#ini.open-basedir