from django.conf.urls import patterns, include, url
from django.contrib import admin

urlpatterns = patterns('',
    # Examples:
    # url(r'^$', 'django_bookmark.views.home', name='home'),
    # url(r'^blog/', include('blog.urls')),

	url(r'^$', 'testpj.views.index', name='home'),
    url(r'^admin/', include(admin.site.urls)),
    url(r'^cookie/(?P<name>\w+)/$', 'testpj.views.cork',name='cork')
)
