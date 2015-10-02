#!/bin/sh

# Minify js/css files using csstidy and jsmin command line tools
# Original files must be in a subfolder called src (you can change this).
# Generate files are saved in the parent folder.
# Example: "css/src/style.css" will be saved as "css/style.css"
# TODO: add "blacklist" and possibility to combine multiple files in one

# css path
csspath='css/src/*'

# js path
jspath='js/src/*'

for file in $csspath
do
    #echo 'css'
    srcdir=$(dirname ${file})
    scrfile=$srcdir'/../'$(basename $file)
    # ##csstidy $file $scrfile
    yui-compressor --type css -o $scrfile $file
    # ##echo 'cssmin > '$scrfile
    # # add new file to commit
    git add $scrfile
done


# for file in $jspath
# do
#     srcdir=$(dirname ${file})
#     scrfile=$srcdir'/../'$(basename $file)
#     jsmin < $file > $scrfile
#     echo 'jsmin > '$scrfile
#     # add new file to commit
#     git add $scrfile
# done