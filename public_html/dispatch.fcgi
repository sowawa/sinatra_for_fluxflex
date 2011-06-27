#!/usr/bin/env /usr/local/rvm/rubies/ruby-1.9.2-p180/bin/ruby

__user_home   = "/home/USER_NAME"

ENV['GEM_HOME'] = __user_home + "/.gem/ruby/1.9.1/"
ENV['GEM_PATH'] = ENV['GEM_HOME']

require 'rubygems'
require 'rack'
require 'sinatra'

require './app.rb'
Rack::Handler::FastCGI.run Sinatra::Application
