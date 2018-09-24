import { h, Component } from 'preact';
import { Router } from 'preact-router';
import Header from 'async!./organisms/header';
import Home from 'async!../routes/home';
import Contents from 'async!../routes/contents';
import Projects from 'async!../routes/projects';
import Genome from 'async!../routes/genome';
import Login from '../components/pages/login';
import Main from '../components/organisms/main';
import Loading from '../components/pages/loading';
import Button from '../components/atoms/button';
import Shadow from '../components/organisms/shadow';
import Gene from '../components/organisms/gene';
import { connect } from 'preact-redux'
import reducer from '../reducer'
import * as actions from '../actions'

@connect(reducer, actions)
class App extends Component {
    constructor(props) {
        super(props)
    }

    handleRoute = e => {this.props.url(e.url); this.currentUrl = e.url}

    render() {
        if(this.state.loading) {
            return <Loading />
        } else if (this.props.s.login) {
            return (
                <div id="app">
                    <Header />
                    <Main>
                        <Router onChange={this.handleRoute}>
                            <Home path="/"/>
                            <Projects path="/projects/" />
                        </Router>
                    </Main>
                    <Button type="talk" />
                </div>
            )
        } else {
            return (
                <div id="app">
                    <Main>
                        <Header />
                        <Router onChange={this.handleRoute}>
                            <Home path="/"/>
                            <Projects path="/projects/" />
                            <Contents path="/contents/" />
                            <Genome path="/genome/" />
                        </Router>
                    </Main>
                    <Gene />
                    <Shadow />
                    <Button type="talk" />
                </div>
            )
        }
    }
}

export default App

//that.db.collection('people').doc().set(doc.data())
