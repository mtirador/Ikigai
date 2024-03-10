import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import './styles.css';

class Level extends Component {
  render() {
    const { levelName, animate, percentage } = this.props;
    return (
      <div className="tube-wrapper">
        <div className="tube">
          <div className={`liquid ${levelName} ${animate}`} style={{ top: `${100 - percentage}%` }}>
            <div className="bubble circle"></div>
            <div className="bubble circle2"></div>
            <div className="bubble circle3"></div>
            <div className="bubble circle4"></div>
            <div className="bubble circle5"></div>
            <div className="bubble circle6"></div>
            <div className="bubble circle7"></div>
            <div className="bubble circle8"></div>
            <div className="bubble circle9"></div>
          </div>
          <div className="metrics">
            {Array.from({ length: 60 }, (_, i) => (
              <div key={i} className="line"></div>
            ))}
          </div>
          <div className="side-line"></div>
          <div className="neck"></div>
          <div className="head"></div>
        </div>
        <span className="level-name">{levelName}</span>
      </div>
    );
  }
}

class App extends Component {
  state = {
    feelingIndex: 0,
    animate: '',
  };

  feelings = [
    {
      feeling: 'love',
      levels: { dopamine: 93, serotonin: 93, oxytocin: 93 },
    },
    {
      feeling: 'depression',
      levels: { dopamine: 28, serotonin: 14, oxytocin: 3 },
    },
    {
      feeling: 'happiness',
      levels: { dopamine: 3, serotonin: 100, oxytocin: 7 },
    },
    {
      feeling: 'anxiety',
      levels: { dopamine: 20, serotonin: 3, oxytocin: 3 },
    },
  ];

  changeFeeling = () => {
    this.setState({ animate: 'animate' }, () => {
      setTimeout(() => {
        this.setState((prevState) => ({
          animate: '',
          feelingIndex: (prevState.feelingIndex + 1) % this.feelings.length,
        }));
      }, 4000);
    });
  };

  componentDidMount() {
    this.intervalId = setInterval(this.changeFeeling, 4500);
  }

  componentWillUnmount() {
    clearInterval(this.intervalId);
  }

  render() {
    const { feelingIndex, animate } = this.state;
    const feeling = this.feelings[feelingIndex];
    const { feeling: feelingName, levels } = feeling;

    return (
      <div className="App">
        <h1 className={animate}>{feelingName}</h1>
        <div className="tubes-wrapper">
          {Object.entries(levels).map(([levelName, percentage]) => (
            <Level key={levelName} levelName={levelName} percentage={percentage} animate={animate} />
          ))}
        </div>
        <a className="source-link" target="_blank" href="https://github.com/edindelan/animated-feelings">
          Source code - GitHub
        </a>
      </div>
    );
  }
}

ReactDOM.render(<App />, document.getElementById('app'));
