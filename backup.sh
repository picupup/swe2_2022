#!/bin/bash


dir=backup/$(date '+%Y-%m-%d_%H-%M-%S')
mkdir $dir
cp -r www $dir/
