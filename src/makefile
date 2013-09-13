build-dir=../build
lib-dir=lib
build-js-dir=${build-dir}/js

theme=blue-icon


all:  build 

build:
	(mkdir ${build-dir};cd ./lab;./allexec.sh)
	(touch ${build-dir}/theme-${theme}; rsync -avC --exclude ${mathjax}.zip lab/* lib/* help themes/${theme}/* ${build-dir})
	(chmod 777 -R ${build-dir}/temp ${build-dir}/images  ${build-dir}/arith)

install:
	(rm -rf /var/www/labs/cse19/*; rsync -avz ${build-dir}/ /var/www/labs/cse19/)	

# don't remove the js directory, since copying it again with mathjax takes too long.
# http://superuser.com/questions/168130/unix-delete-files-and-folders-excluding-pattern
clean:
	(rm -rf ${build-dir})









