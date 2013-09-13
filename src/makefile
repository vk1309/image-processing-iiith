build-dir=../build
lib-dir=lib
build-js-dir=${build-dir}/js

theme=blue-icon


all:  build help-dir 

build:
	(mkdir ${build-dir};cd ./lab;./allexec.sh)

install:
	(rm -rf /var/www/labs/cse19/*; rsync -avz ${build-dir}/ /var/www/labs/cse19/; chmod 777 -R /var/www/labs/cse19/temp /var/www/labs/cse19/images /var/www/labs/cse19/arith)	

help-dir:
	(find ${build-dir} -mindepth 1 -maxdepth 1 ! -name js -print0 | xargs -0n1 rm -rf)
	(touch ${build-dir}/theme-${theme}; rsync -avC --exclude ${mathjax}.zip lab/* lib/* help themes/${theme}/* ${build-dir})

# don't remove the js directory, since copying it again with mathjax takes too long.
# http://superuser.com/questions/168130/unix-delete-files-and-folders-excluding-pattern
clean:
	(find ${build-dir} -mindepth 1 -maxdepth 1 ! -name js -print0 | xargs -0n1 rm -rf; rm -rf ../build)









