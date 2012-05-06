require 'rubygems'
require 'sinatra'

configure do
  # disable rack-protection module that doesn't work with fluxflex
  set :protection, :except => [:ip_spoofing]
end

get '/' do
    'Hello, Fluxflex world!'
end
