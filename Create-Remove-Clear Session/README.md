
## Create-Remove-Clear Sessions Using PHP

### Functions Usage
```php
    // Don't forget you should define session_start(); before usage.

    createSession('name', 'value');// Create session with key 'name' and value 'value'.
    removeSession('name');// Remove session with key 'name'.
    clearSessions();// Clear all sessions.
```
Example Session Creation:
```php
    createSession('sessionName', 'SessionValue');
```
Example Session Deletion:
```php
    removeSession('sessionName');
```
Example Clear All Sessions:
```php
    clearSessions();
```
