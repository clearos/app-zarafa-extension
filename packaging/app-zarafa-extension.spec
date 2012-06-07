
Name: app-zarafa-extension
Epoch: 1
Version: 1.1.6
Release: 1%{dist}
Summary: Zarafa Extension - Core
License: LGPLv3
Group: ClearOS/Libraries
Source: app-zarafa-extension-%{version}.tar.gz
Buildarch: noarch

%description
Zarafa Extension description

%package core
Summary: Zarafa Extension - Core
Requires: app-base-core
Requires: app-contact-extension-core
Requires: app-mail-extension-core
Requires: app-openldap-directory-core
Requires: app-smtp-plugin-core
Requires: app-users

%description core
Zarafa Extension description

This package provides the core API and libraries.

%prep
%setup -q
%build

%install
mkdir -p -m 755 %{buildroot}/usr/clearos/apps/zarafa_extension
cp -r * %{buildroot}/usr/clearos/apps/zarafa_extension/

install -D -m 0644 packaging/zarafa.php %{buildroot}/var/clearos/openldap_directory/extensions/70_zarafa.php

%post core
logger -p local6.notice -t installer 'app-zarafa-extension-core - installing'

if [ $1 -eq 1 ]; then
    [ -x /usr/clearos/apps/zarafa_extension/deploy/install ] && /usr/clearos/apps/zarafa_extension/deploy/install
fi

[ -x /usr/clearos/apps/zarafa_extension/deploy/upgrade ] && /usr/clearos/apps/zarafa_extension/deploy/upgrade

exit 0

%preun core
if [ $1 -eq 0 ]; then
    logger -p local6.notice -t installer 'app-zarafa-extension-core - uninstalling'
    [ -x /usr/clearos/apps/zarafa_extension/deploy/uninstall ] && /usr/clearos/apps/zarafa_extension/deploy/uninstall
fi

exit 0

%files core
%defattr(-,root,root)
%exclude /usr/clearos/apps/zarafa_extension/packaging
%exclude /usr/clearos/apps/zarafa_extension/tests
%dir /usr/clearos/apps/zarafa_extension
/usr/clearos/apps/zarafa_extension/deploy
/usr/clearos/apps/zarafa_extension/language
/usr/clearos/apps/zarafa_extension/libraries
/var/clearos/openldap_directory/extensions/70_zarafa.php
