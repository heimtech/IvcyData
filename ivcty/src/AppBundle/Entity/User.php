<?php
/**
 * Created by PhpStorm.
 * User: UC8456
 * Date: 17.01.2017
 * Time: 16:39
 */
namespace AppBundle\Entity;
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="tl_user")
 */
class User
{
    /**
     * @ORM\Column(type="integer", length=10)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=64)
     */
    private $username;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $tstamp;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=5)
     */
    private $language;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $backendtheme;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $uploader;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $showhelp;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $thumbnails;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $useRTE;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $useCE;

    /**
     * @ORM\Column(type="string", length=128)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $pwChange;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $admin;

    /**
     * @ORM\Column(type="blob")
     */
    private $groups;

    /**
     * @ORM\Column(type="string", length=12)
     */
    private $inherit;

    /**
     * @ORM\Column(type="blob")
     */
    private $modules;

    /**
     * @ORM\Column(type="blob")
     */
    private $themes;

    /**
     * @ORM\Column(type="blob")
     */
    private $pagemounts;

    /**
     * @ORM\Column(type="blob")
     */
    private $alpty;

    /**
     * @ORM\Column(type="blob")
     */
    private $filemounts;

    /**
     * @ORM\Column(type="blob")
     */
    private $fop;

    /**
     * @ORM\Column(type="blob")
     */
    private $forms;

    /**
     * @ORM\Column(type="blob")
     */
    private $formp;

    /**
     * @ORM\Column(type="string", length=1, options={"fixed" = true})
     */
    private $disable;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $start;

    /**
     * @ORM\Column(type="string", length=10)
     */
    private $stop;

    /**
     * @ORM\Column(type="blob")
     */
    private $session;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $dateAdded;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $lastLogin;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $currentLogin;


    /**
     * @ORM\Column(type="smallint", length=5)
     */
    private $loginCount;

    /**
     * @ORM\Column(type="integer", length=10)
     */
    private $locked;

    /**
     * @ORM\Column(type="blob")
     */
    private $calendars;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarp;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarfeeds;   /**
 * @ORM\Column(type="blob")
 */
    private $calendarfeedp;   /**
 * @ORM\Column(type="blob")
 */
    private $faqs;   /**
 * @ORM\Column(type="blob")
 */
    private $faqp;   /**
 * @ORM\Column(type="blob")
 */
    private $news;   /**
 * @ORM\Column(type="blob")
 */
    private $newsp;   /**
 * @ORM\Column(type="blob")
 */
    private $newsfeeds;   /**
 * @ORM\Column(type="blob")
 */
    private $newsfeedp;   /**
 * @ORM\Column(type="blob")
 */
    private $newsletters;   /**
 * @ORM\Column(type="binary", length=16)
 */
    private $avatar;



    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set username
     *
     * @param string $username
     *
     * @return User
     */
    public function setUsername($username)
    {
        $this->username = $username;

        return $this;
    }

    /**
     * Get username
     *
     * @return string
     */
    public function getUsername()
    {
        return $this->username;
    }

    /**
     * Set tstamp
     *
     * @param integer $tstamp
     *
     * @return User
     */
    public function setTstamp($tstamp)
    {
        $this->tstamp = $tstamp;

        return $this;
    }

    /**
     * Get tstamp
     *
     * @return integer
     */
    public function getTstamp()
    {
        return $this->tstamp;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return User
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set email
     *
     * @param string $email
     *
     * @return User
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get email
     *
     * @return string
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set language
     *
     * @param string $language
     *
     * @return User
     */
    public function setLanguage($language)
    {
        $this->language = $language;

        return $this;
    }

    /**
     * Get language
     *
     * @return string
     */
    public function getLanguage()
    {
        return $this->language;
    }

    /**
     * Set backendTheme
     *
     * @param string $backendTheme
     *
     * @return User
     */
    public function setBackendTheme($backendTheme)
    {
        $this->backendTheme = $backendTheme;

        return $this;
    }

    /**
     * Get backendTheme
     *
     * @return string
     */
    public function getBackendTheme()
    {
        return $this->backendTheme;
    }

    /**
     * Set uploader
     *
     * @param string $uploader
     *
     * @return User
     */
    public function setUploader($uploader)
    {
        $this->uploader = $uploader;

        return $this;
    }

    /**
     * Get uploader
     *
     * @return string
     */
    public function getUploader()
    {
        return $this->uploader;
    }

    /**
     * Set showHelp
     *
     * @param \character $showHelp
     *
     * @return User
     */
    public function setShowHelp(\character $showHelp)
    {
        $this->showHelp = $showHelp;

        return $this;
    }

    /**
     * Get showHelp
     *
     * @return \character
     */
    public function getShowHelp()
    {
        return $this->showHelp;
    }

    /**
     * Set thumbnails
     *
     * @param \character $thumbnails
     *
     * @return User
     */
    public function setThumbnails(\character $thumbnails)
    {
        $this->thumbnails = $thumbnails;

        return $this;
    }

    /**
     * Get thumbnails
     *
     * @return \character
     */
    public function getThumbnails()
    {
        return $this->thumbnails;
    }

    /**
     * Set useRTE
     *
     * @param \character $useRTE
     *
     * @return User
     */
    public function setUseRTE(\character $useRTE)
    {
        $this->useRTE = $useRTE;

        return $this;
    }

    /**
     * Get useRTE
     *
     * @return \character
     */
    public function getUseRTE()
    {
        return $this->useRTE;
    }

    /**
     * Set useCE
     *
     * @param \character $useCE
     *
     * @return User
     */
    public function setUseCE(\character $useCE)
    {
        $this->useCE = $useCE;

        return $this;
    }

    /**
     * Get useCE
     *
     * @return \character
     */
    public function getUseCE()
    {
        return $this->useCE;
    }

    /**
     * Set password
     *
     * @param string $password
     *
     * @return User
     */
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Get password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set pwChange
     *
     * @param \character $pwChange
     *
     * @return User
     */
    public function setPwChange(\character $pwChange)
    {
        $this->pwChange = $pwChange;

        return $this;
    }

    /**
     * Get pwChange
     *
     * @return \character
     */
    public function getPwChange()
    {
        return $this->pwChange;
    }

    /**
     * Set admin
     *
     * @param \character $admin
     *
     * @return User
     */
    public function setAdmin(\character $admin)
    {
        $this->admin = $admin;

        return $this;
    }

    /**
     * Get admin
     *
     * @return \character
     */
    public function getAdmin()
    {
        return $this->admin;
    }

    /**
     * Set groups
     *
     * @param string $groups
     *
     * @return User
     */
    public function setGroups($groups)
    {
        $this->groups = $groups;

        return $this;
    }

    /**
     * Get groups
     *
     * @return string
     */
    public function getGroups()
    {
        return $this->groups;
    }

    /**
     * Set inherit
     *
     * @param string $inherit
     *
     * @return User
     */
    public function setInherit($inherit)
    {
        $this->inherit = $inherit;

        return $this;
    }

    /**
     * Get inherit
     *
     * @return string
     */
    public function getInherit()
    {
        return $this->inherit;
    }

    /**
     * Set modules
     *
     * @param string $modules
     *
     * @return User
     */
    public function setModules($modules)
    {
        $this->modules = $modules;

        return $this;
    }

    /**
     * Get modules
     *
     * @return string
     */
    public function getModules()
    {
        return $this->modules;
    }

    /**
     * Set themes
     *
     * @param string $themes
     *
     * @return User
     */
    public function setThemes($themes)
    {
        $this->themes = $themes;

        return $this;
    }

    /**
     * Get themes
     *
     * @return string
     */
    public function getThemes()
    {
        return $this->themes;
    }

    /**
     * Set pagemounts
     *
     * @param string $pagemounts
     *
     * @return User
     */
    public function setPagemounts($pagemounts)
    {
        $this->pagemounts = $pagemounts;

        return $this;
    }

    /**
     * Get pagemounts
     *
     * @return string
     */
    public function getPagemounts()
    {
        return $this->pagemounts;
    }

    /**
     * Set alpty
     *
     * @param string $alpty
     *
     * @return User
     */
    public function setAlpty($alpty)
    {
        $this->alpty = $alpty;

        return $this;
    }

    /**
     * Get alpty
     *
     * @return string
     */
    public function getAlpty()
    {
        return $this->alpty;
    }

    /**
     * Set filemounts
     *
     * @param string $filemounts
     *
     * @return User
     */
    public function setFilemounts($filemounts)
    {
        $this->filemounts = $filemounts;

        return $this;
    }

    /**
     * Get filemounts
     *
     * @return string
     */
    public function getFilemounts()
    {
        return $this->filemounts;
    }

    /**
     * Set fop
     *
     * @param string $fop
     *
     * @return User
     */
    public function setFop($fop)
    {
        $this->fop = $fop;

        return $this;
    }

    /**
     * Get fop
     *
     * @return string
     */
    public function getFop()
    {
        return $this->fop;
    }

    /**
     * Set forms
     *
     * @param string $forms
     *
     * @return User
     */
    public function setForms($forms)
    {
        $this->forms = $forms;

        return $this;
    }

    /**
     * Get forms
     *
     * @return string
     */
    public function getForms()
    {
        return $this->forms;
    }

    /**
     * Set formp
     *
     * @param string $formp
     *
     * @return User
     */
    public function setFormp($formp)
    {
        $this->formp = $formp;

        return $this;
    }

    /**
     * Get formp
     *
     * @return string
     */
    public function getFormp()
    {
        return $this->formp;
    }

    /**
     * Set disable
     *
     * @param \character $disable
     *
     * @return User
     */
    public function setDisable(\character $disable)
    {
        $this->disable = $disable;

        return $this;
    }

    /**
     * Get disable
     *
     * @return \character
     */
    public function getDisable()
    {
        return $this->disable;
    }

    /**
     * Set start
     *
     * @param string $start
     *
     * @return User
     */
    public function setStart($start)
    {
        $this->start = $start;

        return $this;
    }

    /**
     * Get start
     *
     * @return string
     */
    public function getStart()
    {
        return $this->start;
    }

    /**
     * Set stop
     *
     * @param string $stop
     *
     * @return User
     */
    public function setStop($stop)
    {
        $this->stop = $stop;

        return $this;
    }

    /**
     * Get stop
     *
     * @return string
     */
    public function getStop()
    {
        return $this->stop;
    }

    /**
     * Set session
     *
     * @param string $session
     *
     * @return User
     */
    public function setSession($session)
    {
        $this->session = $session;

        return $this;
    }

    /**
     * Get session
     *
     * @return string
     */
    public function getSession()
    {
        return $this->session;
    }

    /**
     * Set dateAdded
     *
     * @param integer $dateAdded
     *
     * @return User
     */
    public function setDateAdded($dateAdded)
    {
        $this->dateAdded = $dateAdded;

        return $this;
    }

    /**
     * Get dateAdded
     *
     * @return integer
     */
    public function getDateAdded()
    {
        return $this->dateAdded;
    }

    /**
     * Set lastLogin
     *
     * @param integer $lastLogin
     *
     * @return User
     */
    public function setLastLogin($lastLogin)
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    /**
     * Get lastLogin
     *
     * @return integer
     */
    public function getLastLogin()
    {
        return $this->lastLogin;
    }

    /**
     * Set currentLogin
     *
     * @param integer $currentLogin
     *
     * @return User
     */
    public function setCurrentLogin($currentLogin)
    {
        $this->currentLogin = $currentLogin;

        return $this;
    }

    /**
     * Get currentLogin
     *
     * @return integer
     */
    public function getCurrentLogin()
    {
        return $this->currentLogin;
    }

    /**
     * Set loginCount
     *
     * @param integer $loginCount
     *
     * @return User
     */
    public function setLoginCount($loginCount)
    {
        $this->loginCount = $loginCount;

        return $this;
    }

    /**
     * Get loginCount
     *
     * @return integer
     */
    public function getLoginCount()
    {
        return $this->loginCount;
    }

    /**
     * Set locked
     *
     * @param integer $locked
     *
     * @return User
     */
    public function setLocked($locked)
    {
        $this->locked = $locked;

        return $this;
    }

    /**
     * Get locked
     *
     * @return integer
     */
    public function getLocked()
    {
        return $this->locked;
    }

    /**
     * Set calendars
     *
     * @param string $calendars
     *
     * @return User
     */
    public function setCalendars($calendars)
    {
        $this->calendars = $calendars;

        return $this;
    }

    /**
     * Get calendars
     *
     * @return string
     */
    public function getCalendars()
    {
        return $this->calendars;
    }

    /**
     * Set calendarp
     *
     * @param string $calendarp
     *
     * @return User
     */
    public function setCalendarp($calendarp)
    {
        $this->calendarp = $calendarp;

        return $this;
    }

    /**
     * Get calendarp
     *
     * @return string
     */
    public function getCalendarp()
    {
        return $this->calendarp;
    }

    /**
     * Set calendarfeeds
     *
     * @param string $calendarfeeds
     *
     * @return User
     */
    public function setCalendarfeeds($calendarfeeds)
    {
        $this->calendarfeeds = $calendarfeeds;

        return $this;
    }

    /**
     * Get calendarfeeds
     *
     * @return string
     */
    public function getCalendarfeeds()
    {
        return $this->calendarfeeds;
    }

    /**
     * Set calendarfeedp
     *
     * @param string $calendarfeedp
     *
     * @return User
     */
    public function setCalendarfeedp($calendarfeedp)
    {
        $this->calendarfeedp = $calendarfeedp;

        return $this;
    }

    /**
     * Get calendarfeedp
     *
     * @return string
     */
    public function getCalendarfeedp()
    {
        return $this->calendarfeedp;
    }

    /**
     * Set faqs
     *
     * @param string $faqs
     *
     * @return User
     */
    public function setFaqs($faqs)
    {
        $this->faqs = $faqs;

        return $this;
    }

    /**
     * Get faqs
     *
     * @return string
     */
    public function getFaqs()
    {
        return $this->faqs;
    }

    /**
     * Set faqp
     *
     * @param string $faqp
     *
     * @return User
     */
    public function setFaqp($faqp)
    {
        $this->faqp = $faqp;

        return $this;
    }

    /**
     * Get faqp
     *
     * @return string
     */
    public function getFaqp()
    {
        return $this->faqp;
    }

    /**
     * Set news
     *
     * @param string $news
     *
     * @return User
     */
    public function setNews($news)
    {
        $this->news = $news;

        return $this;
    }

    /**
     * Get news
     *
     * @return string
     */
    public function getNews()
    {
        return $this->news;
    }

    /**
     * Set newsp
     *
     * @param string $newsp
     *
     * @return User
     */
    public function setNewsp($newsp)
    {
        $this->newsp = $newsp;

        return $this;
    }

    /**
     * Get newsp
     *
     * @return string
     */
    public function getNewsp()
    {
        return $this->newsp;
    }

    /**
     * Set newsfeeds
     *
     * @param string $newsfeeds
     *
     * @return User
     */
    public function setNewsfeeds($newsfeeds)
    {
        $this->newsfeeds = $newsfeeds;

        return $this;
    }

    /**
     * Get newsfeeds
     *
     * @return string
     */
    public function getNewsfeeds()
    {
        return $this->newsfeeds;
    }

    /**
     * Set newsfeedp
     *
     * @param string $newsfeedp
     *
     * @return User
     */
    public function setNewsfeedp($newsfeedp)
    {
        $this->newsfeedp = $newsfeedp;

        return $this;
    }

    /**
     * Get newsfeedp
     *
     * @return string
     */
    public function getNewsfeedp()
    {
        return $this->newsfeedp;
    }

    /**
     * Set newsletters
     *
     * @param string $newsletters
     *
     * @return User
     */
    public function setNewsletters($newsletters)
    {
        $this->newsletters = $newsletters;

        return $this;
    }

    /**
     * Get newsletters
     *
     * @return string
     */
    public function getNewsletters()
    {
        return $this->newsletters;
    }

    /**
     * Set avatar
     *
     * @param binary $avatar
     *
     * @return User
     */
    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return binary
     */
    public function getAvatar()
    {
        return $this->avatar;
    }
}
